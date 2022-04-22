@extends('layouts.master')
@section('title', 'Edit PC')
@section('header', 'List Pc')
@section('content')
    <a href="{{ route('list-pc.index') }}" class="btn-warning mb-3 btn">Kembali</a>
    <div class="card">
        <div class="card-header">
            <h6>List Pc</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('list-pc.update', $client->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for='name'>Nama PC</label>
                    <input type='text' placeholder="Nama PC" value="{{ old('name', $client->name) }}"
                        class="form-control @error('name') is-invalid @enderror" name='name' id='name' class=''>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for='ip'>IP Address</label>
                    <input type='text' value="{{ old('ip', $client->ip) }}"
                        class="form-control @error('ip') is-invalid @enderror" placeholder="Ip Address" name='ip' id='ip'
                        class=''>
                    @error('ip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
