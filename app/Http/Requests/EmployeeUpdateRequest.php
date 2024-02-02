<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' .  $this->employee->user->id,
            'password' => 'required|min:6',
            'nik' => 'required',
            'position' => 'required',
            'photo' => 'nullable|image',
            'gender' => 'required',
            'wages' => 'required',
            'rfid' => 'nullable',
            'address' => 'required',
            'date_of_birth' => 'required|date',
        ];
    }
}
