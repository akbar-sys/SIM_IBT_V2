<?php

namespace App\Http\Controllers;

use App\Models\daftarTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class daftarTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tenant')->latest()->paginate(10);

        return view('daftarTenant/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     */
    public function show(daftarTenant $daftarTenant)
    {
        return view('daftarTenant/show', compact('daftarTenant'));
    }

    public function edit(daftarTenant $daftarTenant)
    {
        //
    }

    public function update(Request $request, daftarTenant $daftarTenant)
    {
        //
    }

    public function destroy($id)
    {
        DB::table('tenant')->where('id', $id)->delete();
        return redirect('daftarTenant')->with('status', 'Data Tenant berhasil dihapus!');
    }
}
