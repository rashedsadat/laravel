<?php

namespace App\Http\Controllers\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Services\SocialFacebookAccountService;

class SocialAuthFacebookController extends Controller
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
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function facebookCallback(SocialFacebookAccountService $service)
    {
        $user = $service->createOrGetUser();
        auth()->login($user);
        return redirect()->to('home');
    }
}
