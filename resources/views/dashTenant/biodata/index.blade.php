@extends('mainTenant') 

@section('title', 'My Profile')

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
                        <li><a href="#">My Profile</a></li>
                        <li class="active">data</li>
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
            
        </div>

        <div class="card-body table-responsive">
                    
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <table class="table table-bordered">
                        @foreach ($biodata as $data)
                        <tbody>
                            <tr>
                                <th style="width:30%">Nama Pemilik Usaha</th>
                                <td>{{$data->nama_pemilik_usaha}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>No.Telp</th>
                                <td>{{$data->no_telp}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Tenant</th>
                                <td>{{$data->jenis_tenant}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Bidang Usaha</th>
                                <td>{{$data->jenis_bidang_usaha}}</td>
                            </tr>
                            <tr>
                                <th>Nama Usaha</th>
                                <td>{{$data->nama_usaha}}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{$data->deskripsi}}</td>
                            </tr>
                            <tr>
                                <th>KTP</th>
                                <td>
                                    {{$data->ktp}}
                                    <div>
                                        <a href="{{ asset('pendaftaran_tenant/'.$data->ktp) }}" target="_blank" class="btn-info btn-sm">
                                            <i class="fa fa-download"></i>Unduh
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>CV</th>
                                <td>
                                    {{$data->cv}}
                                    <div>
                                        <a href="{{ asset('pendaftaran_tenant/'.$data->cv) }}" target="_blank" class="btn-info btn-sm">
                                            <i class="fa fa-download"></i>Unduh
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Proposal Bisnis</th>
                                <td>
                                    {{$data->proposal_bisnis}}
                                    <div>
                                        <a href="{{ asset('pendaftaran_tenant/'.$data->proposal_bisnis) }}" target="_blank" class="btn-info btn-sm">
                                            <i class="fa fa-download"></i>Unduh
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Waktu Submit</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach

                </div>
            </div>

        </div>

    </div>
@endsection