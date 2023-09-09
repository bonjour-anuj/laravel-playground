<?php

namespace App\Providers;

use App\Playground\Events\LogConnectionFailed;
use App\Playground\Events\LogRequestSending;
use App\Playground\Events\LogResponseReceived;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Http\Client\Events\ConnectionFailed;
use Illuminate\Http\Client\Events\RequestSending;
use Illuminate\Http\Client\Events\ResponseReceived;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class       => [
            SendEmailVerificationNotification::class,
        ],
        RequestSending::class   => [
            LogRequestSending::class,
        ],
        ResponseReceived::class => [
            LogResponseReceived::class,
        ],
        ConnectionFailed::class => [LogConnectionFailed::class],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
