<?php

namespace App\Http\Controllers;

use App\Models\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class tnStatusController extends Controller
{
    public function index()
    {
        // return view('dashTenant.status.index');
        $status = DB::table('registenant')->get();
        return view('dashTenant.status.index', compact('status'));
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

    public function show(request $request)
    {
        $datax = DB::table('status')->where(['id_user' => Auth::user()->id])->get();
        return view('dashTenant.status.index')->with('datax', $datax);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(status $status)
    {
        //
    }
}
