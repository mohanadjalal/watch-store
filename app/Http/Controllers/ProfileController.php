<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function index()
    {
        return view('profile', ['user' => auth()->user()]);
    }


    public function update(Request $req, User $user)
    {

        try {
            $user->update(['username' => $req->username, "name" => $req->name, "email" => $req->email, "phone" => $req->phone, 'location' => $req->location]);
        } catch (\Throwable $th) {

            return redirect("/profile")->with('Profile updated successfully');
        }
        return redirect("/profile")->with('Profile updated successfully');





    }
}