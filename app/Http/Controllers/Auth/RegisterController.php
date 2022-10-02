<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserFormRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(UserFormRequest $request)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->phone_no = $request['phone_no'];
        $user->gender = $request['gender'];
        $user->password = Hash::make($request['password']);
        $user->save();
        
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], 
        $request->get('remember'))) {
            $user = User::where('email', '=', $request['email'])->get()->first();
            Auth::user($user);
            auth()->login($user);
            return redirect()->route('home');
        }
    }

}
