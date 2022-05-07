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
    <div class="pl-5 pl-5 pt-2 pb-2">
        <div class="row w-100">
            <div class="col-lg-2">
                Filter
            </div>
            <div class="col-lg-10">
                <div class="row">
                    @for($i = 0; $i < 10; $i++)
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
