<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function logout()
    {
      Auth::logout();

      return response()->json(['message' => 'Successfully logged out']);
    }
}
