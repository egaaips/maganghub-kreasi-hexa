<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        // menampilkan form register
        return view('register');
    }

    public function welcome(Request $request)
    {
        $user = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
        ];

        return view('welcome', compact('user'));
    }
}
