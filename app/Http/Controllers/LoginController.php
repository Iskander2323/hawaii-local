<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function getLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            
           Auth::user()->createToken('authToken')->accessToken;
            return redirect()->route('blog.admin.main.index');
        }

        return redirect()->route('login');

    }

    public function logout(Request $request)
    {
        Auth::user()->tokens()->delete();
        Auth::logout();
        return view('auth.login');
    }

    
}