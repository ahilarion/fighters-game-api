<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return response()->json([
            'message' => 'Register function is called'
        ]);
    }

    public function login(Request $request)
    {
        return response()->json([
            'message' => 'Login function is called'
        ]);
    }

    public function logout(Request $request)
    {
        return response()->json([
            'message' => 'Logout function is called'
        ]);
    }

    public function me(Request $request)
    {
        return response()->json([
            'message' => 'Me function is called'
        ]);
    }
}
