@extends('layouts.app')
@section('title', 'Dashboard')
@section('title-header', 'Dashboard')
@php
    $auth = Auth::user();
@endphp

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a class="small-box bg-info" href="{{ route('laporan-pengaduan.index', []) }}">
                    <div class="inner">
                        <h3>{{ $data['total_pengaduan'] }}</h3>

                        <p>Total Pengaduan</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>

                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a class="small-box bg-success" href="{{ route('laporan-pengaduan.index', ['status' => 'diterima']) }}">
                    <div class="inner">
                        <h3>{{ $data['total_pengaduan_selesai'] }}</h3>

                        <p>Pengaduan Selesai</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>

                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a class="small-box bg-warning" href="{{ route('laporan-pengaduan.index', ['status' => 'proses']) }}">
                    <div class="inner">
                        <h3>{{ $data['total_pengaduan_diproses'] }}</h3>

                        <p>Pengaduan Proses</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>

                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a class="small-box bg-danger" href="{{ route('laporan-pengaduan.index', ['status' => 'ditolak']) }}">
                    <div class="inner">
                        <h3>{{ $data['total_pengaduan_ditolak'] }}</h3>

                        <p>Pengaduan Ditolak</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>

                </a>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a class="small-box bg-danger" href="{{ route('laporan-pengaduan.index', ['status' => 'belum diverifikasi']) }}">
                    <div class="inner">
                        <h3>{{ $data['total_pengaduan_belum_verif'] }}</h3>

                        <p>Pengaduan Belum Diverifikasi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>

                </a>
            </div>
            <!-- ./col -->
        </div>
    </div><!-- /.container-fluid -->
@endsection
