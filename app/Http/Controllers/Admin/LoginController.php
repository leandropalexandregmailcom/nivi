<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request) {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json('Not authorized', 404);
        }

        $user = $request->user();

        return response()->json([
            'name'  => $user->name,
            'email' => $user->email,
            'token' => $user->createToken('token')->accessToken()
        ], 200);
    }

    public function logout(Request $request) {
        Auth::logout();
        return view('home');
    }
}
