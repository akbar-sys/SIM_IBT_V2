<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tnContactController extends Controller
{
    public function data()
    {
        $data = DB::table('kontak')->first();
        return view('UItenant/contact')->with('data', $data);
    }
}
