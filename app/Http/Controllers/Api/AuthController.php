<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return response()->json(['message' => 'User registered successfully']);
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = User::where('email', $request->email)->first();
        $token = $user->createToken('token-name')->plainTextToken;

        return response()->json([
            'message' => 'Login successfully',
            'user' => $user,
            'access_token' => $token,
        ]);
    }

    return response()->json(['message' => 'Invalid credentials'], 401);
}


}
