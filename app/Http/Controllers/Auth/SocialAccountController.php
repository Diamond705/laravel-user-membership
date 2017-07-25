<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SocialAccountController extends Controller
{
    /**
     * Redirect the user to the Social authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return \Socialite::driver($provider)->redirect();
    }

    /**
     *Obtain the user's information.
     *
     * @return Response
     */
    public function handleProviderCallback(\App\SocialAccountService $accountService, $provider)
    {
        try {
            $user = \Socialite::with($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        $authUser = $accountService->findOrCreate(
            $user,
            $provider
        );
        auth()->login($authUser, true);
        return redirect()->to('/welcome')->withDetails($user)->withService($provider);


    }
}