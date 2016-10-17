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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function doLogin()
    {
         if (\Auth::attempt($this->credentials, $this->remember)) {
         return \Redirect::route("/");
    }
    }
}
