<?php

namespace App\Http\Controllers\Social;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Services\SocialGoogleAccountService;

class SocialAuthGithubController extends Controller
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
    public function githubRedirect()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function githubCallback(SocialGoogleAccountService $service)
    {
        $user = $service->createOrGetUser('github');
        session(['guard' => 'web', 'user' => $user]);
        auth()->login($user);
        return redirect()->to('home');
    }
}
