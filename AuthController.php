<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $r)
    {
        return User::create([
            'name' => $r->name,
            'email' => $r->email,
            'password' => Hash::make($r->password)
        ]);
    }

    public function login(Request $r)
    {
        $user = User::where('email', $r->email)->first();

        if (!$user || !Hash::check($r->password, $user->password)) {
            return response(['error' => 'Unauthorized'], 401);
        }

        return [
            'token' => $user->createToken("token")->plainTextToken
        ];
    }
}
