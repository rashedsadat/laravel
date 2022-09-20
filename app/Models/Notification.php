<?php

namespace App\Models;

use App\Mail\OTPMail;
use App\Events\OtpSend;
use Twilio\Rest\Client;
use App\Jobs\SendOtpJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function otp($phone_no){
        return Cache::get($this->otpKye($phone_no));
    }

    public function otpKye($phone_no){
        return "otp_for_{$phone_no}";
    }

    public function cacheTheOtp($phone_no){
        $otp = rand(111111,999999);
        Cache::put([$this->otpKye($phone_no) => $otp], now()->addSeconds(30));
        return $otp;
    }

    public function sendOtp($user, $via_otp){
        if($via_otp == 'otpemail'){
            Mail::to($user->email)->send(new OTPMail($this->cacheTheOtp($user->phone_no)));
        }else{
            $otp = $this->cacheTheOtp($user->phone_no);
            $sid = getenv("TWILIO_ACCOUNT_SID");
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio = new Client($sid, $token);
            $twilio->messages->create(
                            "+8801675875019",
                           ["body" => 'Hi '.Auth::user()->name.' Your account varification code is '.$otp, "from" => "+19253970478"]
                        );
        }
        
    }
}