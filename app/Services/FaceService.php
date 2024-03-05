<?php

namespace App\Services;

use App\Http\Requests\FaceRequest;
use App\Models\Employee;
use App\Traits\UploadTrait;

class FaceService {

    use UploadTrait;

    public function store(FaceRequest $request): array
    {
        $data = $request->validated();
        $newPhoto = [];

        foreach ($request->file('photo') as $photo) {
            array_push($newPhoto, $photo->store('faces', 'public'));
        }
        $data['photo'] = $newPhoto;
        return $data;
    }
    public function update(FaceRequest $request, Employee $employee): array
    {
        $data = $request->validated();
        $newPhoto = [];

        foreach ($employee->faces as $face) {
            $this->remove($face->photo);
        }

        foreach ($request->file('photo') as $photo) {
            array_push($newPhoto, $photo->store('faces', 'public'));
        }
        $data['photo'] = $newPhoto;
        return $data;
    }
}
