<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 400);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response()->json([
            'user' => Auth::user(),
            'accessToken' => $accessToken->token
        ], 200);
    }

    public function logout(Request $request)
    { 
        Auth::user()->tokens()->delete();
        Auth::logout();
        return view('welcome');
    }

    public function logoutUser(Request $request)
    {
        Auth::user()->tokens()->delete();
        return 'Success Logout';
    }
}