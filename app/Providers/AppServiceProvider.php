<?php

namespace App\Providers;

use App\Contracts\Interfaces\AttendanceInterface;
use Illuminate\Support\ServiceProvider;
use App\Contracts\Interfaces\UserInterface;
use App\Contracts\Repositories\UserRepository;
use App\Contracts\Interfaces\EmployeeInterface;
use App\Contracts\Repositories\EmployeeRepository;
use App\Contracts\Interfaces\AttendanceRuleInterface;
use App\Contracts\Interfaces\DetailAttendanceInterface;
use App\Contracts\Interfaces\FaceInterface;
use App\Contracts\Repositories\AttendaceRepository;
use App\Contracts\Repositories\AttendanceRepository;
use App\Contracts\Repositories\AttendanceRuleRepository;
use App\Contracts\Repositories\DetailAttendanceRepository;
use App\Contracts\Repositories\FaceRepository;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        EmployeeInterface::class => EmployeeRepository::class,
        DetailAttendanceInterface::class => DetailAttendanceRepository::class,
        AttendanceInterface::class => AttendanceRepository::class,
        UserInterface::class => UserRepository::class,
        AttendanceRuleInterface::class => AttendanceRuleRepository::class,
        FaceInterface::class => FaceRepository::class,
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) $this->app->bind($index, $value);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
