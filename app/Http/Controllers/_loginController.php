<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
           'email' => 'required|email:dns',
           'pass' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/profile/index');
        }

        return back()->with('loginError', 'Login failed!');

        // dd('berhasil logann');
    }
}
