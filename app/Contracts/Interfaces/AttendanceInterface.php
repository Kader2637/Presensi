<?php
namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;

interface AttendanceInterface extends GetInterface , StoreInterface
{
    /**
     * getStudentAttendanceToday
     *
     * @return mixed
     */
    public function studentAttendanceToday(mixed $id): mixed;

}
