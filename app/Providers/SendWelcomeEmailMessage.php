<?php

namespace App\Providers;

use App\Providers\MemberRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeEmailMessage
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
     * @param  \App\Providers\MemberRegistered  $event
     * @return void
     */
    public function handle(MemberRegistered $event)
    {
        //
    }
}
