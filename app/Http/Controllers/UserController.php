<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\MagicConst\Function_;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("users", ["users" => $users]);
    }
}