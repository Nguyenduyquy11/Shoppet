@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('css')
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

    <!-- Danh mục sản phẩm -->
    <div class="container mt-4">
        <div class="d-flex justify-content-center py-3">
            <h3>
                <a class="text-decoration-none text-muted p3" href="#">Danh mục sản phẩm</a>
            </h3>
        </div>
        <div class="container mt-4">
            <div class="row text-center justify-content-center">
                @foreach ($danhMuc as $item)
                    <div class="col-md-3 mb-3">
                        <a href="{{ route('sanphamdanhmuc', $item->id) }}" class="text-decoration-none d-block">
                            <div class="img-wrapper">
                                <img src="{{ Storage::url($item->anh_danh_muc) }}" class="img-fluid" alt="">
                            </div>
                            <h5 class="mt-2">{{ $item->ten_danh_muc }}</h5>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Sản phẩm yêu thích -->
    <div class="size">
        <div class="container-fluid mt-4">
            <div class="alert alert-dark">
                <a class="text-decoration-none text-secondary" href="/"> Trang chủ</a> | {{ $title }}
            </div>
            <div class="d-flex justify-content-center py-3">
                <h3>
                    <a class="text-decoration-none text-muted p3" href="#">Sản phẩm yêu thích</a>
                </h3>
            </div>
            <div class="row d-flex justify-content-center py-3">
                @foreach ($sanPhamYeuThich as $item)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <a href="{{ route('chitiet', $item->id) }}">
                                <img src="{{ Storage::url($item->hinh_anh) }}" class="card-img-top" width="150px"
                                    height="220px" alt="Product 1">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->ten_san_pham }}</h5>
                                <p class="card-text">{{ $item->mo_ta }}</p>
                                <strong>
                                    <p class="card-text price-regular text-danger">
                                        {{ number_format($item->gia_khuyen_mai, 0, '', '.') }} đ
                                    </p>
                                </strong>
                                <p class="card-text price-old" style="text-decoration: line-through">
                                    {{ number_format($item->gia_san_pham, 0, '', '.') }} <strong
                                        class="text-danger">đ</strong>
                                </p>
                                <form action="{{ route('themvaogiohang') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="so_luong" value="1">
                                    <input type="hidden" name="san_pham_id" value="{{ $item->id }}">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('chitiet', $item->id) }}" class="btn btn-outline-primary">Chi
                                            tiết</a>
                                        <button class="btn btn-outline-success">
                                            <i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center py-3">
                <h3>
                    <a class="text-decoration-none text-muted p3" href="#">Sản phẩm mới</a>
                </h3>
            </div>
            <div class="row d-flex justify-content-center py-3">
                @foreach ($sanPhamMoi as $item)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <a href="{{ route('chitiet', $item->id) }}">
                                <img src="{{ Storage::url($item->hinh_anh) }}" class="card-img-top" width="150px"
                                    height="220px" alt="Product 1">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->ten_san_pham }}</h5>
                                <p class="card-text">{{ $item->mo_ta }}</p>
                                <strong>
                                    <p class="card-text price-regular text-danger">
                                        {{ number_format($item->gia_khuyen_mai, 0, '', '.') }} đ
                                    </p>
                                </strong>
                                <p class="card-text price-old" style="text-decoration: line-through">
                                    {{ number_format($item->gia_san_pham, 0, '', '.') }} <strong
                                        class="text-danger">đ</strong>
                                </p>
                                <form action="{{ route('themvaogiohang') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="so_luong" value="1">
                                    <input type="hidden" name="san_pham_id" value="{{ $item->id }}">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('chitiet', $item->id) }}" class="btn btn-outline-primary">Chi
                                            tiết</a>
                                        <button class="btn btn-outline-success">
                                            <i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center py-3">
                <h3>
                    <a class="text-decoration-none text-muted p3" href="#">Sản phẩm home</a>
                </h3>
            </div>
            <div class="row d-flex justify-content-center py-3">
                @foreach ($listSanPham as $item)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <a href="{{ route('chitiet', $item->id) }}">
                                <img src="{{ Storage::url($item->hinh_anh) }}" class="card-img-top" width="150px"
                                    height="220px" alt="Product 1">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->ten_san_pham }}</h5>
                                <p class="card-text">{{ $item->mo_ta }}</p>
                                <strong>
                                    <p class="card-text price-regular text-danger">
                                        {{ number_format($item->gia_khuyen_mai, 0, '', '.') }} đ
                                    </p>
                                </strong>
                                <p class="card-text price-old" style="text-decoration: line-through">
                                    {{ number_format($item->gia_san_pham, 0, '', '.') }} <strong
                                        class="text-danger">đ</strong>
                                </p>
                                <form action="{{ route('themvaogiohang') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="so_luong" value="1">
                                    <input type="hidden" name="san_pham_id" value="{{ $item->id }}">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('chitiet', $item->id) }}" class="btn btn-outline-primary">Chi
                                            tiết</a>
                                        <button class="btn btn-outline-success">
                                            <i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $listSanPham->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
