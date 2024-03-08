<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\EmployeeInterface;
use App\Contracts\Interfaces\FaceInterface;
use App\Http\Requests\FaceRequest;
use App\Models\Employee;
use App\Models\Face;
use App\Services\FaceService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FaceController extends Controller
{
    private FaceService $service;
    private EmployeeInterface $employee;
    private FaceInterface $face;
    public function __construct(FaceInterface $faceInterface, EmployeeInterface $employeeInterface, FaceService $faceService)
    {
        $this->face = $faceInterface;
        $this->service = $faceService;
        $this->employee = $employeeInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = $this->employee->get();

        return view('menu.face.index', compact('employees'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create(): View
    {
        $employees = $this->employee->get();
        return view('', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaceRequest $request): RedirectResponse
    {
        $data = $this->service->store($request);
        foreach ($data['photo'] as $photo) {
            $this->face->store([
                'employee_id' => $data['employee_id'],
                'photo' => $photo,
            ]);
        }
        return redirect()->back()->with('success', 'Berhasil menambah wajah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Face $face , $id)
    {
        $employees = $this->employee->show($id);
        $faces = $this->face->show($id);
        $count = Face::where('employee_id', $id)->count();
        return view('menu.face.detail' , compact('employees' ,'id' ,'faces' ,'count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Face $face)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaceRequest $request, Employee $employee)
    {
        $data = $this->service->update($request, $employee);
        $this->face->delete($employee->id);
        foreach ($data['photo'] as $photo) {
            $this->face->store([
                'employee_id' => $data['employee_id'],
                'photo' => $photo,
            ]);
        }
        return redirect()->back()->with('success', 'Berhasil mengupdate');
    }

    /**
     * destroy
     *
     * @param  mixed $employee
     * @return void
     */
    public function destroy(Employee $employee)
    {
        foreach ($employee->faces as $face ) {
            $this->service->remove($face->photo);
        }
        $this->face->delete($employee->id);
        return redirect()->back()->with('success', 'Berhasil menghapus');
    }
}
