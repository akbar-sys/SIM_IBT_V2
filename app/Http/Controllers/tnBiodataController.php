<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class tnBiodataController extends Controller
{
    // public function index()
    // {
    //     return view('dashTenant.biodata.index');
    // }

    public function index()
    {
        // $data = DB::table('tenant')->get();

        $biodata = DB::table('registenant')->get();
        return view('dashTenant.biodata.index', compact('biodata'));

        // // return view('regisTenant.index');
        // // return view('regisTenant.index', ['regis' => $regis]);
        // return view('regisTenant.index')->with('regis', $regis);
        // return $regis;

        // biodata::all();
        // $biodata = biodata::all();
        // dd($biodata);
        // return view('dashTenant.biodata.index')->with('biodata', $biodata);

        // dd($data);
        // return view('dashTenant.biodata.index')->with('biodata', biodata);

        // return view('dashTenant.biodata.index', compact('biodata'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(biodata $biodata)
    {
        // $data = Auth::user()->email;

        $biodata = DB::table('registenant')->where(['id_user' => Auth::user()->id])->get();
        return view('dashTenant.biodata.index')->with('biodata', $biodata);

        // $biodata = DB::table('tenant')->where(['id_user' => 8])->get();
        // return view('dashTenant.biodata.index', compact('biodata'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(biodata $biodata)
    {
        //
    }
}
