<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Rules\StrongPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    // protected $redirectTo = RouteServiceProvider::HOME;

    public function showResetForm(){
        return view('auth.confirm');
    }

    public function reset(Request $request){
        
        $rules = [
            'email'                 => ['required', 'email'],
            'password'              => ['required', 'string', 'confirmed', new StrongPassword],
            'password_confirmation' => ['required', 'string']
        ];

        $validator = Validator::make($request->toArray(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $data = $request->toArray();
        if (User::where('email', $data['email'])->exists()) {
            $user = new User();
            $user->password = Hash::make($data['password']);
            $check = $user->where('email', $data['email'])->update(['password' => $user['password']]);
            $user = $user->where('email', $data['email'])->get()->first();
            Auth::user($user);
            Auth::guard('web');
            $redirect = 'home';
        }
        else if (Admin::where('email', '=', $data['email'])->exists()) {
            $user = new Admin();
            $user->password = Hash::make($data['password']);
            $check = $user->where('email', $data['email'])->update(['password' => $user['password']]);
            $user = $user->where('email', $data['email'])->get()->first();
            Auth::user($user);
            Auth::guard('admin');
            $redirect = 'admin.home';
        }else{
            return back()->withInput($request->only('email', 'remember'));
        }

        if($check == 1){
            auth()->login($user);
            return redirect()->route($redirect);
        }else{
            return redirect()->route('login');
        }
    }
}
