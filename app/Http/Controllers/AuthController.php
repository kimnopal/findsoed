<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
}
