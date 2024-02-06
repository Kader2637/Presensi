<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\AttendanceInterface;
use App\Http\Requests\StoreattendanceRequest;
use App\Http\Requests\UpdateattendanceRequest;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    private AttendanceInterface $attendance ;
    public function __construct(AttendanceInterface  $attendance)
    {
        return $this->attendance = $attendance ;
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
    public function store(StoreattendanceRequest $request)
    {
        $this->attendance->store($request->validated());
        return redirect()->back()->with('success' , 'Data Berhasil di sinkronisasi');
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
