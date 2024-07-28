@extends('layouts.client')

@section('content')
    <div class="container mt-4">
        <div class="alert alert-dark">
            <a class="text-decoration-none text-dark" href="/">Trang chủ</a> | Kết quả tìm kiếm: {{ $search }}
        </div>
        <div class="row">
            @foreach ($sanPham as $item)
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
                                    {{ number_format($item->gia_khuyen_mai) }} đ
                                </p>
                            </strong>
                            <p class="card-text price-old" style="text-decoration: line-through">
                                {{ number_format($item->gia_san_pham) }} <strong class="text-danger">đ</strong>
                            </p>
                            <a href="{{ route('chitiet', $item->id) }}" class="btn btn-outline-primary">Xem chi
                                tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
