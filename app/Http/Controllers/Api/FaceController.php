<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Interfaces\EmployeeInterface;
use App\Contracts\Interfaces\FaceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaceRequest;
use App\Http\Resources\EmployeeFaceResource;
use App\Http\Resources\FaceResource;
use App\Models\Face;
use App\Services\FaceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

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
     * index
     *
     * @return JsonResponse
     */

    public function index(): JsonResponse
    {
        $employees = $this->employee->get();

        $faces = $this->face->get();

        $md5 = md5($faces);

        $response = [
            'md5' => $md5,
            'result' => EmployeeFaceResource::collection($employees),
        ];

        return response()->json($response);
    }
    function store(FaceRequest $request): JsonResponse
    {
        $data = $this->service->store($request);
        foreach ($data['photo'] as $photo) {
            $this->face->store([
                'employee_id' => $data['employee_id'],
                'photo' => $photo,
            ]);
        }
        return response()->json(['message' => 'Berhasil menambah', 'status' => 200,]);
    }
}
