<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'The credentials are incorrect'
            ], Response::HTTP_UNPROCESSABLE_ENTITY); //422
        }

        return response()->json([
            'data' => [
                'attributes' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email
                ],
                'token' => $user->createToken($request->device_name)->plainTextToken
            ]
        ]);
    }
}
