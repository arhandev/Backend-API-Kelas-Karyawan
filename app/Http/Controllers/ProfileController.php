<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            $user = Auth::user();
            return response()->json([
                "info" => "Berhasil Mengambil Data Profile",
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
