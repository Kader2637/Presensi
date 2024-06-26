<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'national_identity_number' => $this->nik,
            'phone_number' => $this->no,
            'position' => $this->position,
            'url' => ($this->photo != null) ? asset('storage/'.$this->photo) : asset('storage/default.jpg'),
            'photo' => ($this->photo != null) ? $this->photo : ('default.jpg'),
            'gender' => $this->gender,
            'salary' => $this->wages,
            'rfid' => $this->rfid,
            'address' => $this->address,
            'date_of_birth' => $this->date_of_birth,
        ];
    }
}
