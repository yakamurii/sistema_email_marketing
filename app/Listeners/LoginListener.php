<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login;
use App\Mail\NewAccess;
use Illuminate\Support\Facades\Mail;

class LoginListener
{
   
    public function __construct()
    {
        //
    }

    public function handle(Login $event)
    {
        Mail::to($event->user)->queue(new NewAccess($event->user));
    }
}
