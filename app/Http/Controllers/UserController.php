<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Tous les utilisateurs
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    //badged
    public function badged($id)
    {
        $user = User::find($id);

        return view('user.badged', compact('user'));
    }

}
