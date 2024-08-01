@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection
<style>
    .order-details {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .order-header {
        background-color: #343a40;
        color: #fff;
        padding: 10px;
        border-radius: 5px 5px 0 0;
    }

    .order-body {
        padding: 20px;
    }

    .order-section {
        margin-bottom: 20px;
    }

    .order-actions {
        margin-top: 20px;
    }

    .order-actions a {
        margin-right: 10px;
    }

    .order-details ul {
        list-style: none;
        padding: 0;
    }

    .order-details li {
        margin-bottom: 10px;
    }

    .order-details li strong {
        display: inline-block;
        width: 150px;
    }
</style>
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-title bg-primary text-white p-3">
        <h4 class="mb-0">{{ $title }}</h4>
    </div>
    <div class="container my-5">
        <div class="order-details">
            <div class="order-header">
                <h4>Chi tiết đơn hàng</h4>
            </div>
            <div class="order-body">
                <div class="row">
                    <div class="col-md-6 order-section">
                        <h5>Thông tin người đặt hàng</h5>
                        <ul>
                            <li><strong>Tên người đặt:</strong> {{ $donHang->user->ho_ten }}</li>
                            <li><strong>Email:</strong> {{ $donHang->user->email }}</li>
                            <li><strong>Số điện thoại:</strong> {{ $donHang->so_dien_thoai }}</li>
                            <li><strong>Địa chỉ:</strong> {{ $donHang->dia_chi }}</li>
                        </ul>
                    </div>
                    <div class="col-md-6 order-section">
                        <h5>Thông tin người nhận hàng</h5>
                        <ul>
                            <li><strong>Tên người nhận:</strong> {{ $donHang->ten_nguoi_nhan }}</li>
                            <li><strong>Email:</strong> {{ $donHang->email_nguoi_nhan }}</li>
                            <li><strong>Số điện thoại:</strong> {{ $donHang->so_dien_thoai_nguoi_nhan }}</li>
                            <li><strong>Địa chỉ nhận:</strong> {{ $donHang->dia_chi_nguoi_nhan }}</li>
                            <li><strong>Ghi chú:</strong> {{ $donHang->ghi_chu }}</li>
                            <li><strong>Trạng thái đơn hàng:</strong> {{ $trangThaiDonHang[$donHang->trang_thai_don_hang] }}</li>
                            <li><strong>Trạng thái thanh toán:</strong> {{ $trangThaiThanhToan[$donHang->trang_thai_thanh_toan] }}</li>
                            <li><strong>Tiền hàng:</strong> {{ number_format($donHang->tien_hang, 0, '', '.') }} đ</li>
                            <li><strong>Tiền ship:</strong> {{ number_format($donHang->tien_ship, 0, '', '.') }} đ</li>
                            <li class="text-danger"><strong>Tổng tiền:</strong> <strong>{{ number_format($donHang->tong_tien, 0, '', '.') }} đ</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-title bg-secondary text-secondary p-3 mt-5">
        <h4 class="mb-0">Sản phẩm của đơn hàng</h4>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="thead-info">
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
                    <td>{{ $sanPham->ten_san_pham }}</td>
                    <td>
                        <strong class="text-danger">{{ number_format($item->don_gia, 0, '', '.') }} đ</strong>
                    </td>
                    <td>{{ number_format($item->so_luong) }}</td>
                    <td>
                        <strong class="text-danger">{{ number_format($item->thanh_tien, 0, '', '.') }} đ</strong>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
