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



    public function register(Request $r)
    {

        $user = User::create([
            'name' => $r->name,
            'email' => $r->email,
            'password' => Hash::make($r->password),
        ]);

        return redirect('/login');
    }



    
    public function login(Request $r)
    {
        $r->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($r->only('email', 'password'))) {
            return redirect('/feed');
        }














        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect.',
        ]);
    }
 }

