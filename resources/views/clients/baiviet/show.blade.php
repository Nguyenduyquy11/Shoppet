@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://bizweb.dktcdn.net/100/473/331/themes/889890/assets/slider_3.jpg?1686901385185"
                        class="d-block w-100 h-800" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://bizweb.dktcdn.net/100/473/331/themes/889890/assets/slider_1.jpg?1686901385185"
                        class="d-block w-100 h-800" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://bizweb.dktcdn.net/100/473/331/themes/889890/assets/slider_2.jpg?1686901385185"
                        class="d-block w-100 h-800" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="article">
                    <div class="article-header text-center">
                        <h2 class="article-title">{{ $deTailBaiViet->tieu_de }}</h2>
                        <p class="article-meta">Ngày đăng: {{ $deTailBaiViet->created_at }}</p>
                    </div>
                    <div class="article-image text-center">
                        <img src="{{ Storage::url($deTailBaiViet->hinh_anh) }}" alt="Article Image">
                    </div>
                    <div class="article-content">
                        <p>{{ $deTailBaiViet->noi_dung }}</p>
                    </div>
                    <div class="text-center back-button">
                        <a href="{{ route('/baiviet') }}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
