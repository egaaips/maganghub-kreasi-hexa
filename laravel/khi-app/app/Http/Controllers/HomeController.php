<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // menampilkan halaman utama (home)
        return view('home');
    }
}
