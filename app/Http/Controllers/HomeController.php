<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * Ini memastikan bahwa hanya pengguna yang terautentikasi yang bisa mengakses controller ini.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Tampilkan halaman beranda.
     */
    public function index()
    {
        return view('home');
    }
}
