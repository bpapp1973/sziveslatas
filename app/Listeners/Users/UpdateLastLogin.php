<?php

namespace App\Listeners\Users;

use Carbon\Carbon;
use Auth;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateLastLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        Auth::user()->last_login=Carbon::now();
        Auth::user()->save();
        //$event->user->last_login = Carbon::now();
        //$event->user->save();
    }
}
