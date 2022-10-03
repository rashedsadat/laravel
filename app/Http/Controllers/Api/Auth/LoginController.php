<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $user = '';

            $rules = [
                'email'                 => ['required', 'email'],
                'password'              => ['required', 'string'],
            ];

            $validator = Validator::make($request->toArray(), $rules);
            if($validator->fails()){
                return response()->json($validator->errors(), 422);
            }

            if (User::where('email', '=', $request['email'])->exists()) {
                $user = User::where('email', '=', $request['email'])->get()->first();
                // session(['guard' => 'web', 'user' => $user]);
                $redirect = 'home';
                $guard = 'web';
            }
            else if (Admin::where('email', '=', $request['email'])->exists()) {
                $user = Admin::where('email', '=', $request['email'])->get()->first();
                // session(['guard' => 'admin', 'user' => $user]);
                $redirect = 'admin.home';
                $guard = 'admin';
            }else{
                return back()->withInput($request->only('email', 'remember'));
            }
    
            if (Auth::guard($guard)->attempt(['email' => $request->email, 'password' => $request->password],
            $request->get('remember'))) {
                $access_token = $user->createToken($request['email'])->accessToken;
                $user->access_token =  $access_token;
                $check = $user->save();

                if($check){
                    $message = 'User successfully Login!';
                    $status = 201;
                }else{
                    $message = 'User Login Failed';
                    $status = 422;
                }
                return response()->json(['message' => $message, 'access_token' => $access_token], $status);
                // return redirect()->route($redirect);
            }
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
