@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="container my-5">
        <h1 class="mb-4">{{ $title }}</h1>
        @if (session('success'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="order-details">
            <div class="order-card">
                <div class="order-summary">
                    <h4 class="text-center">Thông Tin Sản Phẩm</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>                                
                                <th class="text-center">Mã đơn hàng</th>
                                <th class="text-center">Ngày đặt</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Tổng tiền</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donHangs as $index => $item)
                                <tr>                                   
                                    <th class="text-center">{{ $item->ma_don_hang }}</th>
                                    <td class="text-center">{{ $item->created_at->format('d-m-Y')}}</td>
                                    <td class="text-center">{{ $trangThaiDonHang[$item->trang_thai_don_hang] }}</td>
                                    <td class="text-danger text-center">
                                        <strong>{{ number_format($item->tong_tien, 0, '', '.') }} đ</strong>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('donhang.show', $item->id) }}" class="btn btn-outline-info">
                                            Xem chi tiết
                                        </a>
                                        <form action="{{ route('donhang.update', $item->id) }}" method="POST" class="d-inline">
                                            @method('PUT')
                                            @csrf
                                            @if ($item->trang_thai_don_hang === $type_cho_xac_nhan)
                                                <input type="hidden" name="huy_don_hang" value="1">
                                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Bạn có xác nhận hủy đơn hàng không?')">Hủy</button>
                                            @elseif($item->trang_thai_don_hang === $type_dang_van_chuyen)
                                                <input type="hidden" name="da_giao_hang" value="1">
                                                <button type="submit" class="btn btn-outline-success" onclick="return confirm('Xác nhận đã nhận hàng')">Đã nhận hàng</button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>                                
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" class="text-right">Tổng Cộng:</th>
                                <th>500,000 VNĐ</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
