<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class tnRegisTenantController extends Controller
{
    public function data()
    {
        $data = DB::table('registenant')->first();
        return view('UItenant/regisTenant')->with('data', $data);
    }

    public function add(Request $request)
    {
        $dokumen = '';

        if ($request->file_ktp) {
            $ktp = $request->file_ktp->getClientOriginalName();
            $request->file_ktp->move('pendaftaran_tenant',$ktp);

            $cv = $request->file_cv->getClientOriginalName();
            $request->file_cv->move('pendaftaran_tenant',$cv);

            $proposal = $request->file_proposal->getClientOriginalName();
            $request->file_proposal->move('pendaftaran_tenant',$proposal);

            $data = [
                'id_user' => Auth::user()->id,
                'nama_pemilik_usaha' => $request->nama,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'jenis_tenant'=> $request->jenis_tenant,
                'jenis_bidang_usaha'=> $request->jenis_bidang,
                'nama_usaha'=> $request->nama_usaha,
                'deskripsi'=> $request->deskripsi,
                'ktp'=> $ktp,
                'cv'=> $cv,
                'proposal_bisnis'=> $proposal,
            ];

            $data_status = [
                'id_user' => Auth::user()->id,
                'nama_pemilik_usaha' => $request->nama,
                'nama_usaha'=> $request->nama_usaha,
                'jenis_tenant'=> $request->jenis_tenant,
                'jenis_bidang_usaha'=> $request->jenis_bidang
            ];
        }
        
        else $data = [
            'id_user' => Auth::user()->id,
            'nama_pemilik_usaha' => $request->nama_pemilik_usaha,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'jenis_tenant'=> $request->jenis_tenant,
            'jenis_bidang_usaha'=> $request->jenis_bidang_usaha,
            'nama_usaha'=> $request->nama_usaha,
            'deskripsi'=> $request->deskripsi,
            'ktp'=> $dokumen,
            'cv'=> $dokumen,
            'proposal_bisnis'=> $dokumen,
        ];
        
        $data_status = [
            'id_user' => Auth::user()->id,
            'nama_pemilik_usaha' => $request->nama,
            'nama_usaha'=> $request->nama_usaha,
            'jenis_tenant'=> $request->jenis_tenant,
            'jenis_bidang_usaha'=> $request->jenis_bidang
        ];

        DB::table('registenant')
        ->insert($data);
        DB::table('status')
        ->insert($data_status);

        // $datax->insert($data);
        return redirect('tnRegistrasi')->with('status', 'Pendaftaran berhasil dilakukan!');
    }
}
