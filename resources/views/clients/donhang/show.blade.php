@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
<style>
    .order-detail {
        border-radius: .75rem;
        background: #f8f9fa;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        margin-top: 2rem;
    }

    .order-detail .header {
        border-bottom: 2px solid #007bff;
        padding-bottom: 1rem;
        margin-bottom: 1rem;
    }

    .order-detail .header h4 {
        margin: 0;
        color: #007bff;
    }

    .order-detail .item {
        border-bottom: 1px solid #dee2e6;
        padding: 1rem 0;
    }

    .order-detail .item:last-child {
        border-bottom: none;
    }

    .order-detail .item .item-title {
        font-weight: bold;
        color: #333;
    }

    .order-detail .item .item-price {
        color: #6c757d;
    }

    .order-detail .total {
        font-weight: bold;
        font-size: 1.25rem;
        padding-top: 1rem;
        border-top: 2px solid #dee2e6;
    }

    .order-detail .status {
        font-size: 1.125rem;
        color: #28a745;
        margin-top: 1rem;
    }
</style>
@section('content')
    <div class="container my-5">
        <h1 class="mb-4">{{ $title }}</h1>
        @if (session('success'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <br><a href="{{ route('donhang.index') }}"><button class="btn btn-info"> Quay lại</button></a>
        <div class="row ">
            <div class="col-md-12">
                <div class="order-detail">
                    <div class="header">
                        <h4>Chi Tiết Đơn Hàng</h4>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Tên người nhận</div>
                        <div class="item-price">{{ $donHang->ten_nguoi_nhan }}</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Email người nhận</div>
                        <div class="item-price">{{ $donHang->email_nguoi_nhan }}</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Số điện thoại người nhận</div>
                        <div class="item-price">{{ $donHang->so_dien_thoai_nguoi_nhan }}</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Địa chỉ người nhận</div>
                        <div class="item-price">{{ $donHang->dia_chi_nguoi_nhan }}</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Ngày đặt hàng</div>
                        <div class="item-price">{{ $donHang->created_at }}</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Ghi chú</div>
                        <div class="item-price">{{ $donHang->ghi_chu }}</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Trạng thái đơn hàng</div>
                        <div class="item-price">{{ $trangThaiDonHang[$donHang->trang_thai_don_hang] }}</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Trạng thái thanh toán</div>
                        <div class="item-price">{{ $trangThaiThanhToan[$donHang->trang_thai_thanh_toan] }}</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Tiền hàng</div>
                        <div class="item-price">{{ number_format($donHang->tien_hang, 0, '', '.') }} đ</div>
                    </div>
                    <div class="item d-flex justify-content-between">
                        <div class="item-title">Tên tiền ship</div>
                        <div class="item-price">{{ number_format($donHang->tien_ship, 0, '', '.') }} đ</div>
                    </div>
                    <div class="total d-flex justify-content-between">
                        <div>Tổng Cộng</div>
                        <div>{{ number_format($donHang->tong_tien, 0, '', '.') }} đ</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header mt-5">
            <br><br><h4>Sản phẩm</h4>
        </div>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số Lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donHang->chiTietDonHang as $item)
                    @php
                        $sanPham = $item->sanPham;
                    @endphp
                <tr>
                    <td>
                        <img src="{{ Storage::url($sanPham->hinh_anh) }}" alt="" width="180">
                    </td>
                    <td>{{ $sanPham->ten_san_pham}}</td>
                    <td>
                        <strong class="text-danger">{{ number_format($item->don_gia,0,'','.') }} đ</strong>
                    </td>
                    <td>{{ number_format($item->so_luong) }}</td>
                    <td>
                        <strong class="text-danger">{{ number_format($item->thanh_tien,0,'','.') }} đ</strong>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
