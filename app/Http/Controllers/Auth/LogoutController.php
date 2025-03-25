<?php

namespace App\Http\Controllers\Auth;

class LoginController extends Controller
{
  public function logout()
    {
      Auth::logout();

      return response()->json(['message' => 'Successfully logged out']);
    }
}
