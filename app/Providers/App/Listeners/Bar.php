<?php

namespace App\Providers\App\Listeners;

use App\Providers\App\Events\Foo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Bar
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
     * @param  \App\Providers\App\Events\Foo  $event
     * @return void
     */
    public function handle(Foo $event)
    {
        //
    }
}
