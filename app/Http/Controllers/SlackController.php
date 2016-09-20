<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SlackController extends Controller
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


}
