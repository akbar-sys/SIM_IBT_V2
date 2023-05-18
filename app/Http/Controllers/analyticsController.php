<?php

namespace App\Http\Controllers;

use App\Models\analytics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class analyticsController extends Controller
{
    public function index()
    {
        $data_pendaftar = DB::table('regisTenant')->count();
        $data_tenant = DB::table('tenant')->count();
        // return view('analytics.index')->with('data_pendaftar', $data_pendaftar);
        return view('analytics.index', compact('data_pendaftar','data_tenant'));

        // return view('analytics.index');
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

    public function show(analytics $analytics)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(analytics $analytics)
    {
        //
    }
}
