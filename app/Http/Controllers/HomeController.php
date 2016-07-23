<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        $except = ['loginSlack'];
        $this->middleware('auth',['except' => $except]);
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

    public function loginSlack()
    {
        return \Socialize::with('slack')->scopes(['identity.basic,identity.email,identity.team,identity.avatar'])->redirect();
    }
}
