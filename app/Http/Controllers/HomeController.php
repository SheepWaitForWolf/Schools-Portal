<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

    public function doLogin(Request $request)
    {
         if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) 
        {
        return redirect('/home');
        }

        return redirect('/login')->withErrors([
            'email' => 'The credentials you entered did not match our records. Try again?',
            ]);
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }

}
