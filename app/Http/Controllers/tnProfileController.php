<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tnProfileController extends Controller
{
    public function data()
    {
        $data = DB::table('profil')->first();
        return view('indexTenant')->with('data', $data);
    }
}
