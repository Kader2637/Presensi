<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AttendanceDetailInterface;
use App\Contracts\Interfaces\AttendanceInterface;
use App\Contracts\Interfaces\AttendanceRuleInterface;
use App\Contracts\Interfaces\EmployeeInterface;
use App\Exports\AbsensiExport;
use App\Http\Requests\StoreattendanceRequest;
use App\Http\Requests\UpdateattendanceRequest;
use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    private AttendanceInterface $attendance;
    private AttendanceDetailInterface $attendanceDetail;
    private EmployeeInterface $employee;
    private AttendanceRuleInterface $attendanceRule;
    // private AttendanceDetailInterface $attendanceDetail;
    public function __construct(AttendanceInterface $attendance, AttendanceDetailInterface $attendanceDetailInterface, EmployeeInterface $employeeInterface, AttendanceRuleInterface $attendanceRuleInterface)
    {
        $this->attendanceRule = $attendanceRuleInterface;
        $this->employee = $employeeInterface;
        $this->attendanceDetail = $attendanceDetailInterface;
        // $this->attendanceDetail = $attendanceDetailInterface;
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
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = "https://pkl.hummatech.com/api/entry-time";
        $response = file_get_contents($url);
        dd($response);
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

            $attendance = $this->attendance->checkAttendanceToday($data['user_id'])
                ? : $this->attendance->store($attendanceData);

            foreach ($data['detail_attendances'] as $detailAttendance) {
                $detailAttendanceData = [
                    'attendance_id' => $attendance->id,
                    'status' => $detailAttendance['status'],
                    'created_at' => $detailAttendance['created_at'],
                    'updated_at' => $detailAttendance['updated_at'],
                ];

                if (!$this->attendanceDetail->checkAttendanceToday([
                    'status' => $detailAttendance['status'],
                    'attendance_id' => $attendance->id,
                ])) {
                    $this->attendanceDetail->store($detailAttendanceData);
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
