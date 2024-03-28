<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\DetailAttendanceInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\DetailAttendance;

class DetailAttendanceRepository extends BaseRepository implements DetailAttendanceInterface
{
    public function __construct(DetailAttendance $detailAttendance)
    {
        $this->model = $detailAttendance;
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }

    /**
     * checkAttendanceToday
     *
     * @param  mixed $data
     * @return mixed
     */
    public function checkAttendanceToday(array $data): mixed
    {
        return $this->model->query()
            ->whereDate('created_at', now())
            ->where('status', $data['status'])
            ->where('attendance_id', $data['attendance_id'])
            ->first();
    }

}

