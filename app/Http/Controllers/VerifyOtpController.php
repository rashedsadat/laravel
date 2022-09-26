<?php

namespace App\Http\Controllers;

use App\Events\OtpSend;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\OtpRequest;
use App\Models\Admin;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class VerifyOtpController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function showVerifyForm(){
        return view('auth.verify');
    }

    public function sendVerifyOtp(Request $request){
        $notification = new Notification();
        $user = session('user');
        $notification->sendOtp($user, $request['otp_via']);
        return back();
    }

    public function confirmVerificationOtp(OtpRequest $request){
        $notification = new Notification();
        $user = session('user');
        if($request->otp == Cache::get($notification->otpKye($user->phone_no))){
            if(session('guard') == 'web'){
                User::where('id', $user->id)->update(['verified_at' => now()]);
                $updated_user = User::where('id', $user->id)->first();
                session(['user' => $updated_user]);
                return redirect('home');
            }else if(session('guard') == 'admin'){
                Admin::where('id', $user->id)->update(['verified_at' => now()]);
                $updated_user = Admin::where('id', $user->id)->first();
                session(['user' => $updated_user]);
                return redirect()->route('admin.home'); 
            }
        }
        return back()->with(['status' => 'OTP is Expaire or Invalid']);
    }
}
