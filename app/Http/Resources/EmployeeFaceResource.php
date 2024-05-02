<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeFaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $faces = $this->faces->map(function ($face) {
            return new FaceResource($face);
        });

        return [
            'rfid' => $this->rfid,
            'md5' => md5($faces->toJson()),
            'faces' => $faces->toArray(),
        ];
    }
}
