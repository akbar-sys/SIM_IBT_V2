@extends('main') 

@section('title', 'Analytics')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h4 style="margin-top: 10px">Dashboard IBT ITK</h4>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Analytics</a></li>
                        <li class="active">Data</li>
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

        <div class="content">
            <div class="container-fluid-analytics">
                <div class="row">

                    <div class="col-lg-3 col-6">
                        <div class="small-box-analytics bg-regis">
                            <div class="inner">
                                <div class="text">
                                    <h3>{{ $data_pendaftar }}</h3>
                                    <p>Jumlah pendaftaran</p>
                                </div>
                                <span class="info-box-icon">
                                    <i class="fa fa-user-plus"></i>
                                </span>
                            </div>
                            <a href="/regisTenant" class="small-box-footer">
                                More Info
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="small-box-analytics bg-aktif">
                            <div class="inner">
                                <div class="text">
                                    <h3>{{ $data_tenant }}</h3>
                                    <p>Jumlah tenant</p>
                                </div>
                                <span class="info-box-icon">
                                    <i class="fa fa-users"></i>
                                </span>
                            </div>
                            <a href="/daftarTenant" class="small-box-footer">
                                More Info
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection