<?php

namespace App\Observers;

use App\Models\DetailAttendance;
use Faker\Provider\Uuid;

class DetailAttendanceObserver
{
    /**
     * Handle the DetailAttendance "creating" event.
     */
    public function creating(DetailAttendance $detailAttendance): void
    {
        $detailAttendance->id = Uuid::uuid();
    }

    /**
     * Handle the DetailAttendance "created" event.
     */
    public function created(DetailAttendance $detailAttendance): void
    {
        //
    }

    /**
     * Handle the DetailAttendance "updated" event.
     */
    public function updated(DetailAttendance $detailAttendance): void
    {
        //
    }

    /**
     * Handle the DetailAttendance "deleted" event.
     */
    public function deleted(DetailAttendance $detailAttendance): void
    {
        //
    }

    /**
     * Handle the DetailAttendance "restored" event.
     */
    public function restored(DetailAttendance $detailAttendance): void
    {
        //
    }

    /**
     * Handle the DetailAttendance "force deleted" event.
     */
    public function forceDeleted(DetailAttendance $detailAttendance): void
    {
        //
    }
}
