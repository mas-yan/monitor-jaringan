@extends('layouts.master')
@section('header', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total PC</h4>
                    </div>
                    <div class="card-body">
                        {{ $pc }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Aktif</h4>
                    </div>
                    <div class="card-body">
                        {{ $terhubung }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-times-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Tidak Aktif</h4>
                    </div>
                    <div class="card-body">
                        {{ $tidakTerhubung }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
