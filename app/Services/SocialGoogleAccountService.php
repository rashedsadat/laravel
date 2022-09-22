<?php

namespace App\Services;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Social\SocialGoogleAccount;

class SocialGoogleAccountService
{
    public function createOrGetUser($driver)
    {
        $test = Socialite::driver($driver)->stateless()->user();
        $account = SocialGoogleAccount::whereProvider($driver)
                                        ->whereProviderUserId($test->getId())
                                        ->first();

        if ($account) {
            return $account->user;
        } else {
            $account = new SocialGoogleAccount([
                'provider_user_id' => $test->getId(),
                'provider' => $driver
            ]);

            $user = User::whereEmail($test->getEmail())->first();
            if (!$user) {
                $user = new User();
                $user->name = $test->user['name'];
                $user->email = $test->user['email'];
                $user->phone_no = null;
                $user->gender = 'none';
                $user->verified_at = now();
                $user->password = md5(rand(1,10000));
                $user->save();
                $account->user()->associate($user);
                $account->save();
                return $user;
            }
            return $user;
        }
    }
}