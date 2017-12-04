<?php

namespace App\Listeners;

use App\Events\messagePosted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class messageSent
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
     * @param  messagePosted  $event
     * @return void
     */
    public function handle(messagePosted $event)
    {
        //
    }
}
