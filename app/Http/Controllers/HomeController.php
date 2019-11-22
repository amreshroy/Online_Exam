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

    /**
     * Show the User dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home'); 
    }
    public function reading()
    {
        return view('frontView.reading');
    }
    public function practice()
    {
        return view('frontView.practice');
    }
    public function exam()
    {
        return view('frontView.exam');
    }
}
