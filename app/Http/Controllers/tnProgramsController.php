<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tnProgramsController extends Controller
{
    public function data()
    {
        $data = DB::table('program')->first();
        return view('UItenant/programs')->with('data', $data);
    }
}
