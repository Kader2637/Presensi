<?php

namespace App\Services;

use App\Enums\UploadDiskEnum;
use App\Http\Requests\EmployeeRequest;
use App\Traits\UploadTrait;

class EmployeeService {

    use UploadTrait;

    public function store(EmployeeRequest $request): array
    {
        $data = $request->validated();
        if ($request->has('photo')) {
            $data['photo'] = $request->file('photo')->store(UploadDiskEnum::PROFILE->value, 'public');
        }
        return $data;
    }
}
