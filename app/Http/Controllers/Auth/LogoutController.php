<?php

namespace App\Http\Controllers\Auth;

class LoginController extends Controller
{
  public function logout()
    {
      Auth::logout();
    }
}
