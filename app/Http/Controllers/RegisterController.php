<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create()
    {
        return view('register.create');
    }

    public function store(Request $req)
    {
        $form = $req->validate([
            "name" => ['required', "min:2", 'max:255'],
            "username" => ['required', "unique:users", 'max:255'],
            "email" => ['required', 'email', "unique:users", 'max:255'],
            "password" => ['required', "min:5", 'max:255'],

        ]);

        User::create($form);

        session()->flash('auth', "User registered successfully ");

        return redirect('/');
    }


}