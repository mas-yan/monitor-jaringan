@extends('layouts.master')
@section('header', 'List Pc')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h6>List Pc</h6>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama PC</th>
                        <th>Ip Address</th>
                        <th>Status</th>
                        <th>Action</th>
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
                            <td>
                                <form action="{{ route('list-pc.destroy', $client->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{ route('list-pc.edit', $client->id) }}" class="btn btn-warning">Edit</a> |
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
