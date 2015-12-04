<?php

namespace JoshGoodson\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'JoshGoodson\Events\SomeEvent' => [
            'JoshGoodson\Listeners\EventListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        // Fires on each authentication attempt
        $events->listen('auth.attempt', function($credentials, $remember, $login) {
            //
        });

        // Fires on successful logins
        $events->listen('auth.login', function($user, $remember) {
            //
        });

        // Fires on logouts
        $events->listen('auth.logout', function($user) {
            //
        });
    }
}
