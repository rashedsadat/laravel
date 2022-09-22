<?php

namespace App\Services;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Social\SocialFacebookAccount;

class SocialFacebookAccountService
{
    public function createOrGetUser()
    {
        // $test = Socialite::driver('facebook')->stateless()->user();
        $test = Socialite::driver('facebook')->user();
        $account = SocialFacebookAccount::whereProvider('facebook')
            ->whereProviderUserId($test->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialFacebookAccount([
                'provider_user_id' => $test->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::whereEmail($test->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'email' => $test->getEmail(),
                    'name' => $test->getName(),
                    'password' => md5(rand(1,10000)),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}