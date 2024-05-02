<?php
namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeFaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'rfid' => $this->rfid,
            'md5' => md5($this->faces),
            'faces' => EmployeeFaceResource::collection($this->faces),
        ];
    }
}
