<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tnOrganizationController extends Controller
{
    public function data()
    {
        $data = DB::table('organisasi')->first();
        return view('UItenant/organization')->with('data', $data);
    }
}
