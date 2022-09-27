<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Models\Admin;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Requests\OtpRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

class VerifyOtpController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
    }

    public function showVerifyForm(){
        return view('auth.verify');
    }

    public function sendVerifyOtp(Request $request, $id){
        if($request->isMethod('post')){
            $user = User::findOrFail($id);

            $header = $request->header('Authorization');
            if($header == ''){
                $message = 'Authorization is required!';
                return response()->json(['message' => $message], 422);
            }else{
                if($header == $user->access_token){
                    $notification = new Notification();
                    // $user = session('user');
                    $notification->sendOtp($user, $request['otp_via']);
                    return response()->json(['message' => 'OTP code send Successfully!']);
                }else{
                    $message = 'Authorization does not match!';
                    return response()->json(['message' => $message], 422);
                }
            }
            
        }
        
    }

    public function confirmVerificationOtp(Request $request, $id){
        if($request->isMethod('post')){
            $rules = [
                'otp' => ['required', 'max:6', 'min:6'],
            ];
    
            $validator = Validator::make($request->toArray(), $rules);
            if($validator->fails()){
                return response()->json($validator->errors(), 422);
            }

            // $notification = new Notification();

            if($request->otp == '123456'){
                if($request['guard'] == 'web'){
                    User::where('id', $request->id)->update(['verified_at' => now()]);
                    $updated_user = User::where('id', $request->id)->first();
                    return response()->json(['user' => $updated_user]);
                }else if($request['guard'] == 'admin'){
                    Admin::where('id', $request->id)->update(['verified_at' => now()]);
                    $updated_user = Admin::where('id', $request->id)->first();
                    return response()->json(['user' => $updated_user]);
                }
            }
            return response()->json(['message' => 'OTP is Expaire or Invalid']);
        }
        
    }
}
