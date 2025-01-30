<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginSubmit(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ],
        [
            'name.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->withErrors([
            'user' => 'Pengguna tidak ditemukan',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('home');
    }
}
