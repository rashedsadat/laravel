<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\OtpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class VerifyOtpController extends Controller
{
    public function showVerifyForm(){
        return view('auth.verify');
    }

    public function sendVerifyOtp(Request $request){
        $notification = new Notification();
        $notification->sendOtp(auth()->user(), $request['otp_via']);
        return back();
    }

    public function confirmVerificationOtp(OtpRequest $request){
        $notification = new Notification();
        dd(auth()->user());
        if($request->otp == Cache::get($notification->otpKye(auth()->user()->phone_no))){
            auth()->user()->update(['email_verified_at' => now()]);
            return redirect('home');
        }
        return back()->with(['status' => 'OTP is Expaire or Invalid']);
    }
}
