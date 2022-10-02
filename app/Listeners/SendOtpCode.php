<?php

namespace App\Listeners;

use App\Events\OtpSend;
use App\Jobs\SendOtpJob;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendOtpCode
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(OtpSend $event)
    {
        SendOtpJob::dispatch($event->user)->delay(now()->addSeconds(2));
    }
}
