<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('token')->plainTextToken;

        return response([
            'success' => true,
            'message' => 'User created and logged in',
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->only('username', 'password'))) {
            return response([
                'success' => false,
                'message' => 'Invalid login details',
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = auth()->user();

        $token = $user->createToken('token')->plainTextToken;

        return response([
            'success' => true,
            'message' => 'Logged in',
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response([
            'success' => true,
            'message' => 'Logged out',
        ]);
    }

    public function me()
    {
        $user = auth()->user();

        return response([
            'success' => true,
            'message' => 'User data',
            'user' => $user,
        ]);
    }
}
