@extends('member.layout')

@section('content')
    <div class="banner-container">
        <div class="your-class" style="width: 100%">
            <img src="{{ asset('/assets/icon/banner-1.jpg') }}" alt="Gambar Banner" class="banner-item">
            <img src="{{ asset('/assets/icon/banner-2.webp') }}" alt="Gambar Banner" class="banner-item">
            <img src="{{ asset('/assets/icon/banner-3.jpg') }}" alt="Gambar Banner" class="banner-item">
        </div>
        <div class="banner-text-container">
            <div class="d-flex justify-content-center align-items-center" style="height: 300px">
                <p class="banner-text" style="opacity: 1">Selamat Datang Web Di E-Commerce </p>
            </div>
        </div>
    </div>
    <div class="pl-5 pl-5 pt-2 pb-2 mt-3">
        <div class="row w-100">
            <div class="col-lg-2">
                <p class="font-weight-bold">Kategori</p>
                <ul class="list-group">
                    @foreach($categories as $category)
                        <a href="/">
                            <li class="list-group-item">{{ $category->nama }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-10">
                <div class="row">
                    @foreach($data as $v)
                        <div class="col-lg-3 col-md-4 mb-4">
                            <div class="card card-item" data-id="{{ $v->id }}" style="cursor: pointer">
                                <img class="card-img-top" src="{{ asset('/assets/barang'). "/" . $v->gambar }}"
                                     alt="Card image cap" height="150">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $v->nama }}</h5>
                                    <p class="card-text">Rp. {{ $v->harga }}</p>
                                    <a href="#" class="btn btn-sm btn-primary">Tambah Keranjang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('.card-item').on('click', function () {
                let id = this.dataset.id;
                window.location.href = '/product/' + id;
            });
        });
    </script>
@endsection
