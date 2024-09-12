<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credential = $request->only(['email', 'password']);
        if (Auth::attempt($credential)) {
            // Alert::success('Success', 'Selamat Anda Berhasil Login');
            return redirect()->intended('dashboard');
        }
        // Alert::error('Error', 'Email atau Password salah');
        return redirect()->back();
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
