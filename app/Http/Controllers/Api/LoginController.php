<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json('Not authorized', 404);
        }

        $user = $request->user();

        $userObj = User::find($user->id);

        return response()->json([
            'name'  => $user->name,
            'email' => $user->email,
            'token' => $userObj->createToken('Token Name')->accessToken
        ], 200);
    }

    public function logout(Request $request) {
        if($request->user()->token()->revoke()) {
            return response()->json([
                'message' => 'logout successfully',
            ], 200);
        }

        return response()->json([
            'message' => 'could not log out',
        ], 404);
    }
}
