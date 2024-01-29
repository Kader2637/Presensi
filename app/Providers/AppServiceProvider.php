<?php

namespace App\Providers;

use App\Contracts\Interfaces\AttendanceRuleInterface;
use App\Contracts\Interfaces\DivisionInterface;
use App\Contracts\Interfaces\EmployeeInterface;
use App\Contracts\Interfaces\EmployeeRepository;
use App\Contracts\Interfaces\EmployeInterface;
use App\Contracts\Interfaces\UserInterface;
use App\Contracts\Interfaces\UserRepository;
use App\Contracts\Repositories\AttendanceRuleRepository;
use App\Contracts\Repositories\DivisionRepository;
use App\Contracts\Repositories\EmployeRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        EmployeeInterface::class => EmployeeRepository::class,
        DivisionInterface::class => DivisionRepository::class,
        AttendanceRuleInterface::class => AttendanceRuleRepository::class,
        UserInterface::class => UserRepository::class,
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
