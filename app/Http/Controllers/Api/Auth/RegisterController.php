<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use App\Rules\UniqueEmail;
use Illuminate\Http\Request;
use App\Rules\StrongPassword;
use App\Rules\ValidPhoneNumber;
use App\Rules\UniquePhoneNumber;
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

    // protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(){
        $this->middleware('guest');
    }

    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        if($request->isMethod('post')){
            $rules = [
                'name'                  => ['required', 'string', 'max:255'], 
                'email'                 => ['required', 'email', 'max:255', new UniqueEmail], 
                'phone_no'              => ['required', 'max:11', new UniquePhoneNumber, new ValidPhoneNumber],
                'gender'                => ['required', 'string'],
                'password'              => ['required', 'string', 'confirmed', new StrongPassword],
                'password_confirmation' => ['required', 'string']
            ];

            $validator = Validator::make($request->toArray(), $rules);
            if($validator->fails()){
                return response()->json($validator->errors(), 422);
            }

            $user = new User();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phone_no = $request['phone_no'];
            $user->gender = $request['gender'];
            $user->password = Hash::make($request['password']);
            $user->save();
            
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], 
            $request->get('remember'))) {
                $user = User::where('email', $request['email'])->first();
                $access_token = $user->createToken($request['email'])->accessToken;
                $user->access_token =  $access_token;
                $check = $user->save();

                if($check){
                    $message = 'User successfully registred!';
                    $status = 201;
                }else{
                    $message = 'User not registred';
                    $status = 422;
                }
                return response()->json(['message' => $message, 'access_token' => $access_token], $status);
            }
        }
        
    }

}
