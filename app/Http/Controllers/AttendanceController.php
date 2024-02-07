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
    private AttendanceInterface $attendance ;
    private AttendanceDetailInterface $attendanceDetail;
    public function __construct(AttendanceInterface  $attendance, AttendanceDetailInterface $attendanceDetailInterface)
    {
        $this->attendanceDetail = $attendanceDetailInterface;
        $this->attendance = $attendance ;
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
            if (!$attendance = $this->attendance->studentAttendanceToday($data['student_id'])) {
                $dataAttendance['student_id'] = $data['student_id'];
                $attendance = $this->attendance->store($dataAttendance);
            }

            $dataDetail['status'] = $data['status'];
            $dataDetail['attendance_id'] = $attendance->id;
            $dataDetail['created_at'] = $data['created_at'];
            $this->attendanceDetail->store($dataDetail);
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
