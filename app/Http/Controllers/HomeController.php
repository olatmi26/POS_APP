<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('home');
    }   

    public function index()
    {
        //return "okay";
        //return Auth::user()->profileImage;
        return view('site-dashboard');
    }
}
