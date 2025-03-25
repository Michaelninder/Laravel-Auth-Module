<?php

namespace App\Http\Controllers\Auth;

class LoginController extends Controller
{
  public function showLogin()
  {
    return view('auth.login');
  }
  
  public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'user' => Auth::user(),
                'message' => 'Successfully logged in',
            ]);
        }
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
}
