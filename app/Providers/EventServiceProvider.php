<?php

namespace App\Providers;

use App\Models\attendace_detail;
use App\Models\attendance;
use App\Models\AttendanceRule;
use App\Models\division;
use App\Models\Employe;
use App\Observers\AttendanceDetailObserver;
use App\Observers\AttendanceObserver;
use App\Observers\AttendanceRuleObserver;
use App\Observers\DivisionObserver;
use App\Observers\EmployeObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Employe::observe(EmployeObserver::class);
        division::observe(DivisionObserver::class);
        attendance::observe(AttendanceObserver::class);
        attendace_detail::observe(AttendanceDetailObserver::class);
        AttendanceRule::observe(AttendanceRuleObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
