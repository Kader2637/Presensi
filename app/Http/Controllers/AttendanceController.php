<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AttendanceInterface;
use App\Contracts\Interfaces\AttendanceRuleInterface;
use App\Contracts\Interfaces\DetailAttendanceInterface;
use App\Contracts\Interfaces\EmployeeInterface;
use App\Exports\AbsensiExport;
use App\Http\Requests\StoreattendanceRequest;
use App\Http\Requests\UpdateattendanceRequest;
use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    private AttendanceInterface $attendance;
    private DetailAttendanceInterface $detailAttendance;
    private EmployeeInterface $employee;
    private AttendanceRuleInterface $attendanceRule;
    public function __construct(AttendanceInterface $attendance, DetailAttendanceInterface $detailAttendanceInterface, EmployeeInterface $employeeInterface, AttendanceRuleInterface $attendanceRuleInterface)
    {
        $this->attendanceRule = $attendanceRuleInterface;
        $this->employee = $employeeInterface;
        $this->detailAttendance = $detailAttendanceInterface;
        $this->attendance = $attendance;
    }

    /**
     * getAttendance
     *
     * @param  mixed $request
     * @return void
     */
    public function getAttendance(Request $request)
    {
        $date = now();
        if ($request->has('date')) {
            $date = $request->date;
        }
        $request->merge(['date' => $date]);
        $employes = $this->employee->search($request);

        $attendanceYears = Attendance::query()
            ->selectRaw('YEAR(created_at) as year')
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->get();
        $attendanceMonth = Attendance::query()
            ->selectRaw('MONTH(created_at) as month')
            ->groupBy('month')
            ->orderBy('month', 'desc')
            ->get();
        $attendanceRule = $this->attendanceRule->ruleToday();
        return view('menu.absensi', compact('attendanceRule', 'attendanceYears', 'attendanceMonth', 'employes', 'request'));
    }

    public function export_excel(Request $request)
    {
        $request->validate([
            'month' => 'min:1,max:12',
        ], [
            'month.max' => 'Batas bulan hanya 12',
        ]);
        $year = $request->input('year');
        $month = $request->input('month');
        return Excel::download(new AbsensiExport($year, $month), "absensi-{$year}-{$month}.xlsx");
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $url = "https://pkl.hummatech.com/api/entry-time";
        $response = file_get_contents($url);
        $entryTimes = json_decode($response)->result;
        $employees = Employee::query()
            ->count();
        return view('dashboard' , compact('employees', 'entryTimes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->data as $data) {
            $attendanceData = [
                'employee_id' => $data['user_id'],
                'status' => $data['status'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at'],
            ];

            if (!$attendance = $this->attendance->checkAttendanceToday(['employee_id' => $data['user_id'], 'created_at' => $data['created_at']])) {
                $attendance = $this->attendance->store($attendanceData);
            }

            foreach ($data['detail_attendances'] as $detailAttendance) {
                $dataAttendanceDetail['attendance_id'] = $attendance->id;
                $dataAttendanceDetail['status'] = $detailAttendance['status'];
                $dataAttendanceDetail['created_at'] = $detailAttendance['created_at'];
                $dataAttendanceDetail['updated_at'] = $detailAttendance['updated_at'];
                if (!$this->detailAttendance->checkAttendanceToday(['status' => $detailAttendance['status'], 'attendance_id' => $attendance->id])) {
                    $this->detailAttendance->store($dataAttendanceDetail);
                }
            }
        }

        return response()->json(['message' => 'Sinkronisasi Presensi Berhasil', 'code' => 200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateattendanceRequest $request, attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(attendance $attendance)
    {
        //
    }
}
