<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AttendanceDetailInterface;
use App\Contracts\Interfaces\AttendanceInterface;
use App\Http\Requests\StoreattendanceRequest;
use App\Http\Requests\UpdateattendanceRequest;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    private AttendanceInterface $attendance;
    private AttendanceDetailInterface $attendanceDetail;
    // private AttendanceDetailInterface $attendanceDetail;
    public function __construct(AttendanceInterface $attendance, AttendanceDetailInterface $attendanceDetailInterface)
    {
        $this->attendanceDetail = $attendanceDetailInterface;
        // $this->attendanceDetail = $attendanceDetailInterface;
        $this->attendance = $attendance;
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
        $dataJson = $request->data;
        foreach ($dataJson as $data) {
            $dataAttendance['employee_id'] = $data['user_id'];
            $dataAttendance['status'] = $data['status'];
            $attendance = $this->attendance->store($dataAttendance);

            foreach ($data['detail_attendances'] as $detailAttendance) {
                $dataAttendanceDetail['attendance_id'] = $attendance->id;
                $dataAttendanceDetail['status'] = $detailAttendance['status'];
                $dataAttendanceDetail['created_at'] = $detailAttendance['created_at'];
                $dataAttendanceDetail['updated_at'] = $detailAttendance['updated_at'];
                $this->attendanceDetail->store($dataAttendanceDetail);
            }
            // $this->attendanceDetail->store($dataDetail);
        }
        return response()->json(['message' => 'Berhasil menambah absensi'], 200);
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
