<?php

namespace App\Listeners;

use Carbon\Carbon;

class LoginListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $event->user->access_last = Carbon::now();
        $event->user->save();
    }
}
