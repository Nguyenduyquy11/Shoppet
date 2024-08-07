@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection>
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
        @foreach ($listBaiViet as $item)
            <div class="row">
                <!-- Bài viết 1 -->
                <div class="col-md-4 mb-5">
                    <div class="article">
                        <div class="article-header text-center">
                            <h2 class="article-title">{{ $item->tieu_de }}</h2>
                            <p class="article-meta">Ngày đăng: {{ $item->created_at }}</p>
                        </div>
                        <div class="article-image text-center">
                            <a href="{{ route('/chitietbaiviet', $item->id) }}"><img src="{{ Storage::url($item->hinh_anh) }}" class="img-fluid" width="800px" height="400px"></a>
                        </div>
                        <div class="article-content">
                            <p>{{ Str::limit($item->noi_dung, 50) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
