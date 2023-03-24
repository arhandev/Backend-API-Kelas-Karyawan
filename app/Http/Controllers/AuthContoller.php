<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use stdClass;

class AuthContoller extends Controller
{
    public function login(LoginRequest $request)
    {
        try {
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return response()->json([
                    "info" => "Email tidak ditemukan",
                    "data" => new stdClass()
                ], 400);
            }

            if (!Hash::check($request->password, $user->password)) {
                return response()->json([
                    "info" => "Password yang dimasukkan salah",
                    "data" => new stdClass()
                ], 400);
            }

            $token = $user->createToken('auth_type')->plainTextToken;

            return response()->json([
                "info" => "Berhasil Melakukan Login Pengguna",
                "data" => [
                    'user' => $user,
                    'token' => $token
                ]
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }

    public function register(RegisterRequest $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);;
            $user->save();

            return response()->json([
                "info" => "Berhasil Melakukan Registrasi Pengguna",
                "data" => $user
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "info" => "Terjadi Sesuatu Error",
                "data" => new stdClass()
            ], 500);
        }
    }
}
