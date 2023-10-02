<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            return response()->json([
                'token' =>auth()->$user->createToken()->plainTextToken,
            ]);
        } else {
            return response()->json([
                'error' => 'El correo electrónico o la contraseña no son válidos.',
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return response()->json([
            'message' => 'Sesión cerrada correctamente.',
        ]);
    }
}
