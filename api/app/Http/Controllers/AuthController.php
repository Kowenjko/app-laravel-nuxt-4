<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
        ]);

        $user = User::create($validatedData);

        return response()->json(['status' => true, 'message' => 'User registered successfully', 'user' => $user], 201);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only("email", "password"))) {
            return response()->json(['status' => false, 'message' => 'Invalid credentials'], 401);
        }

        $user = Auth::user();

        $token = $user->createToken("auth_token")->plainTextToken;

        return response()->json(['status' => true, 'message' => 'User logged in successfully', 'token' => $token], 200);
    }
    public function profile(Request $request)
    {
        $user = Auth::user();
        return response()->json(['status' => true, 'message' => 'User profile retrieved successfully', 'user' => $user], 200);
    }
    public function logout()
    {
        Auth::logout();
        return response()->json(['status' => true, 'message' => 'User logged out successfully'], 200);
    }
}
