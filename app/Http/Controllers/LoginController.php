<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class LoginController extends Controller
{


    public function create()
    {
        return view("login.create");

    }

    public function store(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('email', 'password');
        if (!auth()->attempt($credentials)) {
            return redirect('/login')->withErrors(['login' => 'Your provided credentials could not be verified.'])->withInput($credentials);

        }

        return redirect('/')->with('auth', 'Welcome Back!');
    }


    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('auth', 'bye bye !');

    }
}