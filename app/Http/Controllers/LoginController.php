<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('masuk.index', [
            'tittle' => 'Masuk',
            'active' => 'masuk'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        Auth::attempt($credentials);

        if (Auth::check()) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('loginError', 'Gagal Masuk! Silahkan Ulangi lagi!');
        }

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/dashboard');
        // }

        // return back()->with('loginError', 'Gagal Masuk! Silahkan Ulangi lagi!');
    }
}
