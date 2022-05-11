@extends('member.layout')

@section('content')
    <div class="container-fluid mt-2">
        <ol class="breadcrumb breadcrumb-transparent mb-0">
            <li class="breadcrumb-item">
                <a href="/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data->nama }}
            </li>
        </ol>
        <div class="w-100 d-flex">
            <img src="{{ asset('/assets/barang'). '/' . $data->gambar }}" height="400" width="400" alt="Gambar Produk" class="mr-3">
            <div class="flex-grow-1">
                <div class="font-weight-bold" style="font-size: 24px">{{ $data->nama }}</div>
            </div>
        </div>
    </div>
@endsection
