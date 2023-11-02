<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ReRegistrationController extends Controller
{
    public function daftar()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'addres' => 'required|string|max:255',
            'city' => 'required|string|max:255',
        ]);

        // Simpan data pendaftaran siswa ke dalam database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'addres' => $request->addres,
            'city' => $request->city,
        ]);

        return redirect('/'); // Ganti dengan halaman yang sesuai
    }
}
