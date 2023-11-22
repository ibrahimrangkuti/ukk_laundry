<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function process(Request $request)
    {
        // validasi input dari user
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string'
        ]);

        // cek apakah login dengan email dan password berhasil
        if (Auth::atempt($request->only('email', 'password'))) {
            // jika berhasil
            // return redirect()->route('dashboard');
            dd(auth()->user());
        } else {
            // jika tidak berhasil
            return back()->with('error', 'Email atau password salah');
        }
    }
}
