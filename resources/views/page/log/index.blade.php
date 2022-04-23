@extends('layouts.master')
@section('header', 'Log Laporan Pc')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form action="{{ route('log') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label>Dari Tanggal</label>
                    <input type="date" value="{{ request('start_date') }}" name="start_date" class="form-control">
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Sampai</label>
                    <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                </div>
            </div>
            <div class="col-2">
                <div class="form-group mt-4">
                    <button type="submit" name="cari" class="btn btn-warning btn-block"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </form>
    <div class="card">
        <div class="card-header">
            <h6>Log Laporan Pc</h6>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama PC</th>
                        <th>Ip Address</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->ip }}</td>
                            <td>{{ $client->status }}</td>
                            <td>{{ $client->Date }}</td>
                            <td>{{ \Carbon\Carbon::parse($client->updated_at)->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
