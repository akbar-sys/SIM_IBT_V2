<?php

namespace App\Http\Controllers;

use App\Models\regisTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\sendMailAcc;
use App\Mail\sendMailDec;

class regisTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regis = DB::table('registenant')->latest()->paginate(10);

        // // return view('regisTenant.index');
        // // return view('regisTenant.index', ['regis' => $regis]);
        // return view('regisTenant.index')->with('regis', $regis);
        // return $regis;
        return view('regisTenant/index', compact('regis'));
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
        $data = DB::table('profil')->first();
        return view('profile.index')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\regisTenant  $regisTenant
     * @return \Illuminate\Http\Response
     */
    public function show(regisTenant $regisTenant)
    {
        // return $regisTenant;

        // $regisTenant->makeHidden(['ktp']);
        return view('regisTenant/show', compact('regisTenant'));

        // $regis = DB::table('registenant')->get();
        // return view('regisTenant/show', compact('regis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\regisTenant  $regisTenant
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisTenant $regisTenant)
    {
        $nama = $regisTenant->nama_pemilik_usaha;
        Mail::to($regisTenant->email)->send(new sendMailAcc($nama));
        // Mail::to('andhikaaditya12@gmail.com')->send(new sendMailAcc($nama));

        $data = [
            'id_user' => Auth::user()->id,
            'nama_pemilik_usaha' => $regisTenant->nama_pemilik_usaha,
            'email' => $regisTenant->email,
            'no_telp' => $regisTenant->no_telp,
            'jenis_tenant'=> $regisTenant->jenis_tenant,
            'jenis_bidang_usaha'=> $regisTenant->jenis_bidang_usaha,
            'nama_usaha'=> $regisTenant->nama_usaha,
            'deskripsi'=> $regisTenant->deskripsi,
            'ktp'=> $regisTenant->ktp,
            'cv'=> $regisTenant->cv,
            'proposal_bisnis'=> $regisTenant->proposal_bisnis,
        ];

        DB::table('tenant')
        ->insert($data);

        $id = $regisTenant->id;
        $id_user = $regisTenant->id_user;

        DB::table('status')->where('id_user', $id_user)->update([
            'status'=> 2
        ]);

        DB::table('registenant')->where('id', $id)->delete();
        return redirect('regisTenant')->with('status', 'Berhasil menambahkan Tenant!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\regisTenant  $regisTenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, regisTenant $regisTenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regisTenant  $regisTenant
     * @return \Illuminate\Http\Response
     */
    // public function destroy(regisTenant $regisTenant)
    public function destroy(RegisTenant $regisTenant)
    {   
        $nama = $regisTenant->nama_pemilik_usaha;
        Mail::to($regisTenant->email)->send(new sendMailDec($nama));
        // Mail::to('andhikaaditya12@gmail.com')->send(new sendMailAcc($nama));
      
        $id = $regisTenant->id;
        $id_user = $regisTenant->id_user;

        DB::table('status')->where('id_user', $id_user)->update([
            'status'=> 0
        ]);

        DB::table('registenant')->where('id', $id)->delete();
        return redirect('regisTenant')->with('status', 'Data Tenant berhasil dihapus!');
    }
}