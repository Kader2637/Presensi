<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\AttendanceInterface;
use App\Models\Attendance;

class AttendanceRepository extends BaseRepository implements AttendanceInterface {
    public function __construct(Attendance $attendance)
    {
        $this->model = $attendance;
    }

    /**
     * get
     *
     * @return mixed
     */
    public function get(): mixed
    {
        return $this->model->query()
            ->get();
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
            ->updateOrCreate($data);
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
            ->whereDate('created_at', $data['created_at'])
            ->where('employee_id', $data['employee_id'])
            ->first();
    }

}
