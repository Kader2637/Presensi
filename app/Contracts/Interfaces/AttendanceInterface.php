<?php
namespace App\Contracts\Interfaces;

use App\Contracts\Interfaces\Eloquent\GetInterface;
use App\Contracts\Interfaces\Eloquent\StoreInterface;
use App\Contracts\Interfaces\Eloquent\UpdateInterface;

interface AttendanceInterface extends GetInterface, StoreInterface
{
    /**
     * checkAttendanceToday
     *
     * @param  mixed $id
     * @return mixed
     */
    public function checkAttendanceToday(mixed $id): mixed;
}
