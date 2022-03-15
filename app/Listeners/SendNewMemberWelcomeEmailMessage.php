<?php

namespace App\Listeners;

use App\Events\NewMemberRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewMemberWelcomeEmailMessage
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
     * @param  \App\Events\NewMemberRegistered  $event
     * @return void
     */
    public function handle(NewMemberRegistered $event)
    {
        //
    }
}
