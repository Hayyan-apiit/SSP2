<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleController extends Controller
{
    public function googlepage()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $existingUser = User::where('google_id', $user->id)->orWhere('email', $user->email)->first();

            if ($existingUser) {
                Auth::login($existingUser);
                return redirect()->intended('redirect');
            } else {
                // Create a new user only if the email doesn't already exist
                $newUser = User::firstOrNew(['email' => $user->email], [
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy'),
                    'role' => $this->determineUserRole($user->email)
                ]);

                // If the user was just created (not already in the database), save it
                if (!$newUser->exists) {
                    $newUser->save();
                }

                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

 
}
