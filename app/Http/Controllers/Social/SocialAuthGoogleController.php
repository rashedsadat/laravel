<?php

namespace App\Http\Controllers\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Services\SocialGoogleAccountService;
use Illuminate\Support\Facades\Auth;

class SocialAuthGoogleController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
  /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function googleCallback(SocialGoogleAccountService $service)
    {
        $user = $service->createOrGetUser('google');
        Auth::guard('web');
        Auth::user($user);
        auth()->login($user);
        return redirect()->to('home');
    }
}
