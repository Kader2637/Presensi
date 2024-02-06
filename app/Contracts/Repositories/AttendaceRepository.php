<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AttendanceInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\attendance;

class AttendaceRepository extends BaseRepository implements AttendanceInterface
{
    public function __construct(attendance $attendance)
    {
        $this->model = $attendance ;
    }

    public function get(): mixed
    {

    }

    public function store(array $data): mixed
    {
        return $this->model->query()->create($data);
    }
}

