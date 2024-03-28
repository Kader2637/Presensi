<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AttendanceDetailInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\attendace_detail;
use App\Models\attendance;

class AttendanceDetailRepository extends BaseRepository implements AttendanceDetailInterface
{
    public function __construct(attendace_detail $attendanceDetail)
    {
        $this->model = $attendanceDetail;
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

