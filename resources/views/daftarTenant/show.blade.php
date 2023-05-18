@extends('main') 

@section('title', 'Daftar Tenant')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Daftar Tenant</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ url('daftarTenant') }}">Daftar tenant</a></li>
                        <li class="active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">

        <div class="animated fadeIn">
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Detail Pendaftaran Tenant</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('daftarTenant') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    
                    <div class="row">
                        <div class="col-md-8 offset-md-2">

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width:30%">Nama Pemilik Usaha</th>
                                        <td>{{$daftarTenant->nama_pemilik_usaha}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$daftarTenant->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>No.Telp</th>
                                        <td>{{$daftarTenant->no_telp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Tenant</th>
                                        <td>{{$daftarTenant->jenis_tenant}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Bidang Usaha</th>
                                        <td>{{$daftarTenant->jenis_bidang_usaha}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Usaha</th>
                                        <td>{{$daftarTenant->nama_usaha}}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td>{{$daftarTenant->deskripsi}}</td>
                                    </tr>
                                    <tr>
                                        <th>KTP</th>
                                        <td>
                                            {{$daftarTenant->ktp}}
                                            <div>
                                                <a href="{{ asset('pendaftaran_tenant/'.$daftarTenant->ktp) }}" target="_blank" class="btn-info btn-sm">
                                                    <i class="fa fa-download"></i>Unduh
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CV</th>
                                        <td>
                                            {{$daftarTenant->cv}}
                                            <div>
                                                <a href="{{ asset('pendaftaran_tenant/'.$daftarTenant->cv) }}" target="_blank" class="btn-info btn-sm">
                                                    <i class="fa fa-download"></i>Unduh
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Proposal Bisnis</th>
                                        <td>
                                            {{$daftarTenant->proposal_bisnis}}
                                            <div>
                                                <a href="{{ asset('pendaftaran_tenant/'.$daftarTenant->proposal_bisnis) }}" target="_blank" class="btn-info btn-sm">
                                                    <i class="fa fa-download"></i>Unduh
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Submit</th>
                                        <td>{{$daftarTenant->created_at}}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
@endsection