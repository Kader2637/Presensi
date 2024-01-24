<?php

namespace App\Observers;

use App\Models\Employe;
use Faker\Provider\Uuid;

class EmployeObserver
{
    /**
     * Handle the Classification "created" event.
     */
    public function creating(Employe $Employe): void
    {
        $Employe->id = Uuid::uuid();
    }
}
