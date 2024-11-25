<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($request->only(["email", "password"]))) {
            session()->regenerate();
            return redirect()->intended();
        }

        return back();
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "username" => "required|string|unique:users,username",
            "email" => "required|string|email",
            "password" => "required|string|min:8",
        ]);

        $role = Role::where('name', 'admin')->first();
        $request["role_id"] = $role->id;
        $request["password"] = Hash::make($request["password"]);

        $user = User::create($request->all());

        Auth::login($user);

        return redirect(route('home'));
    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect(route('home'));
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            // dd($user->user);
            $registeredUser = User::where('email', $user->getEmail())->first();

            if ($registeredUser) {
                Auth::login($registeredUser);
            } else {
                $domain = explode('@', $user->getEmail())[1];
                if (in_array($domain, ['mhs.unsoed.ac.id', 'unsoed.ac.id'])) {
                    $newUser = User::create([
                        'name' => $user->getName(),
                        'username' => explode('@', $user->getEmail())[0],
                        'email' => $user->getEmail(),
                        'password' => Hash::make('password'),
                        'role_id' => User::USER,
                        'avatar' => $user->getAvatar(),
                    ]);

                    Auth::login($newUser);
                } else {
                    return redirect(route('auth.login'));
                }
            }

            session()->regenerate();
            return redirect()->intended();
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect(route('auth.login'));
        }
    }
}
