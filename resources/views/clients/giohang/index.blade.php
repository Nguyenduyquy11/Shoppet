@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Giỏ Hàng</h1>
        @if (session('msg'))
            <div class="alert alert-danger">
                {{ session('msg') }}
            </div>
        @endif
        <div class="row">
            @foreach ($cart as $key => $item)
                <div class="col-md-12">
                    <hr>
                    <div class="cart-item d-flex align-items-center">
                        <a href="{{ route('chitiet', $key) }}">
                            <img src="{{ Storage::url($item['hinh_anh']) }}" class="img-fluid me-3" width="100px"
                                alt="Product Image">
                        </a>
                        <div class="flex-grow-1">
                            <h5 class="mb-1">{{ $item['ten_san_pham'] }}</h5>
                            <p class="mb-1"></p>
                            <div class="d-flex align-items-center">
                                <span class="me-3">Số lượng: <strong>{{ $item['so_luong'] }}</strong></span>
                                <span>Giá: <strong>{{ number_format($item['gia'] * $item['so_luong'], 0, '', '.') }}
                                        đ</strong></span>
                            </div>
                        </div>
                        <form action="{{ route('xoacart', $key) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Bạn muốn xóa đơn hàng này?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ms-3">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                    <hr>
                </div>
            @endforeach

            <!-- Tổng giá và các tùy chọn -->
            <div class="col-md-12 d-flex justify-content-end">
                <div class="cart-summary p-3 bg-light rounded" style="width: 100%; max-width: 400px;">
                    <h4 class="mb-3">Tổng Kết</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-2">
                            <strong>Tổng phụ:</strong>
                            <strong>{{ number_format($subTotal, 0, '', '.') }} đ</strong>
                        </li>
                        <hr>
                        <li class="d-flex justify-content-between mb-2">
                            <strong>Phí giao hàng:</strong>
                            @if (!empty($cart))
                                <strong>{{ number_format($shipping, 0, '', '.') }} đ</strong>
                            @else
                                <strong>0 đ</strong>
                            @endif
                        </li>
                        <hr>
                        <li class="d-flex justify-content-between mb-3">
                            <strong>Tổng cộng:</strong>
                            @if (!empty($cart))
                                <strong class="text-danger">{{ number_format($total, 0, '', '.') }} đ</strong>
                            @else
                                <strong>0 đ</strong>
                            @endif
                        </li>
                        <a href="#" class="btn btn-outline-primary w-100">Tiến hành thanh toán</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
