<?php

namespace App\Http\Controllers\Auth;

class LoginController extends Controller
{
  public function showLogin()
  {
    return view('auth.login');
  }
}
