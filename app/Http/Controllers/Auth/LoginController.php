<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (User::where('email', '=', $request['email'])->exists()) {
            $user = User::where('email', '=', $request['email'])->get()->first();
            $guard = 'web';
            Auth::user($user);
            $redirect = 'home';
        }
        else if (Admin::where('email', '=', $request['email'])->exists()) {
            $user = Admin::where('email', '=', $request['email'])->get()->first();
            $guard = 'admin';
            Auth::user($user);
            $redirect = 'admin.home';
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
            auth()->login($user);
            return redirect()->route($redirect);
        }
        
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
