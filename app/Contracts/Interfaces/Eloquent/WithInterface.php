<?php

namespace App\Contracts\Interfaces\Eloquent;

interface WithInterface
{
    /**
     * Handle the Get all data event from models.
     *
     * @return mixed
     */

    public function with(): mixed;
}
