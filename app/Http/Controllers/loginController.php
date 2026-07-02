<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show()
    {
        return view('login.show');
    }

    public function regst()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        // 1. validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        // 2. créer user f database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 3. connecter user automatiquement
        Auth::login($user);

        // 4. redirect
        return redirect('/feed');
    }

    public function login(Request $request)
    {
        // 1. validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // 2. vérifier email + password
        if (Auth::attempt($request->only('email', 'password'))) {

            // حماية session
            $request->session()->regenerate();

            // ila login صحيح
            return redirect('/feed');
        }

        // ila email ola password ghalat
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
