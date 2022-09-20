<?php

namespace App\Jobs;

use App\Mail\OTPMail;
use App\Models\Notification;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendOtpJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // dd($this->data->email);
        $notification = new Notification();
        // Mail::to($this->data->email)->send(new WelcomeMail($this->data->user));
        Mail::to($this->data->email)->send(new OTPMail($notification->cacheTheOtp(session('user')->phone_no)));
    }
}
