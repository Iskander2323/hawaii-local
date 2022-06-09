<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserCreateRequest;
use App\Models\UserRole;
use App\Models\User;
use App\Http\Resources\UserResource;

class RegisterController extends Controller
{

    public function store(UserCreateRequest $request)
    {
        if ($request['password'] == $request['check_password']) {
        $user = User::create([
            'name' => $request['name'],
            'phone_number' => $request['phone_number'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        UserRole::insert([
            'user_id'   => $user->id,
            'role_id'   => 2,
        ]);
        Auth::login($user);
        Auth::user()->createToken('authToken')->accessToken;
        } 
        else {
        return 'Пароли не совпадают';
        }
        return new UserResource($user);
    }
    
}