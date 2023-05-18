<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    //Login

    public function index()
    {
        return view('login.regis');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:6|',
        ]);

        User::create([ 
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);

        // return redirect('/login');
        return redirect('/login')->with('CRR', 'berhasil Registrasi');

    }

    //Logout

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
    
}