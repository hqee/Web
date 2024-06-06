<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Carbon;

class YahooController extends Controller
{
    public function redirectToYahoo()
    {
        return Socialite::driver('yahoo')->redirect();
    }

    public function handleYahooCallback()
    {
        try {
            $user = Socialite::driver('yahoo')->user();
            $finduser = User::where('yahoo_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'email_verified_at' => Carbon::now(),
                    'yahoo_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);
                Auth::login($newUser);
                return redirect('/home');
            }
        } catch (Exception $e) {
            return redirect('login')->with('error', 'Mohon maaf, kami sedang memperbaiki aplikasi agar sesuai dengan kebijakan Yahoo');
        }
    }
}
