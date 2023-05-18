@extends('mainTenant') 

@section('title', 'Status Pendaftaran')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h4 style="margin-top: 10px">Dashboard Tenant</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Status Pendaftaran</a></li>
                        <li class="active">Info</li>
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
                        <strong class="title-cap">Status Pendaftaran Tenant</strong>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        @foreach ($datax as $data)
                        <thead>
                            <th class="col-2">Nama Tenant</th>
                            <th class="col-2">Nama Usaha</th>
                            <th class="col-2">Jenis Tenant</th>
                            <th class="col-2">Jenis Bidang Usaha</th>
                            <th class="col-2">Tanggal Pengajuan</th>
                            <th class="col-1">status</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->nama_pemilik_usaha }}</td>
                                <td>{{ $data->nama_usaha }}</td>
                                <td>{{ $data->jenis_tenant }}</td>
                                <td>{{ $data->jenis_bidang_usaha }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td class="text-center">
                                    <div class="badge {{ $data->status == 1 ? 'badge-warning' : ($data->status == 2 ? 'badge-success' : 'badge-danger') }}">
                                        {{ $data->status == 1 ? 'Diproses' : ($data->status == 2 ? 'Diterima' : 'Ditolak') }}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection