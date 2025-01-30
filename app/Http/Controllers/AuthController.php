<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


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
            Alert::success('Success', 'Login Berhasil');
            return redirect()->route('home');
        }

        Alert::error('Error', 'Login Gagal');
        return back();
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        Alert::success('Success', 'Logout Berhasil');
        return redirect()->route('home');
    }
}
