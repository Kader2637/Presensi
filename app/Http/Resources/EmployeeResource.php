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
            'name' => $this->user->name,
            'email' => $this->user->email,
            'id_number' => $this->nik,
            'position' => $this->position,
            'photo' => ($this->photo != null) ? asset('storage/'.$this->photo) : null,
            'gender' => $this->gender,
            'wages' => $this->wages,
            'rfid' => $this->rfid,
            'address' => $this->address,
            'date_of_birth' => $this->date_of_birth,
        ];
    }
}
