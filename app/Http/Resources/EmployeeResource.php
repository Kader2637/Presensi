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
            'name' => $this->user->name,
            'email' => $this->user->email,
            'Nasional_identity_number' => $this->nik,
            'no_telephone' => $this->no,
            'position' => $this->position,
            'photo' => ($this->photo != null) ? asset('storage/'.$this->photo) : asset('storage/default.jpg'),
            'gender' => $this->gender,
            'wages' => $this->wages,
            'rfid' => $this->rfid,
            'address' => $this->address,
            'date_of_birth' => $this->date_of_birth,
        ];
    }
}
