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
    <div class="size">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-dark">
                        <a class="text-decoration-none text-secondary" href="/">Danh mục thú cưng:</a> | {{ $DetailDanhMuc->ten_danh_muc }}
                    </div>
                </div>

                @foreach ($sanPham as $item)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <a href="{{ route('chitiet', $item->id) }}"><img src="{{ Storage::url($item->hinh_anh) }}"
                                    class="card-img-top" width="150px" height="220px" alt="Product 1"></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->ten_san_pham }}</h5>
                                <p class="card-text">{{ $item->mo_ta }}</p>
                                <strong>
                                    <p class="card-text price-regular text-danger">
                                        {{ number_format($item->gia_khuyen_mai, 0, '', '.') }} đ</p>
                                </strong>
                                <p class="card-text price-old" style="text-decoration: line-through">
                                    {{ number_format($item->gia_san_pham, 0, '', '.') }} <strong class="text-danger">đ</strong></p>
                                <a href="{{ route('chitiet', $item->id) }}" class="btn btn-outline-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- {{ $listSanPham->links('pagination::bootstrap-5') }} --}}
        </div>
    </div>
@endsection
