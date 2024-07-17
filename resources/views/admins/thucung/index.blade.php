@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-title bg-primary text-white p-3">
        <h4 class="mb-0">Danh Sách Thú Cưng</h4>
    </div>
    <a href="{{ route('admin_sanpham.create') }}" class="btn btn-success ml-10 mt-3 mb-3">Thêm mới</a>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Tên Thú Cưng</th>
                <th>Ảnh Thú Cưng</th>
                <th>Số Lượng</th>
                <th>Giá</th>
                <th>giá khuyến mại</th>
                <th>Ngày đăng</th>
                <th>Giới tính</th>
                <th>Mô Tả</th>
                <th>Giống loài</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listThuCung as $index => $thuCung)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $thuCung->ten_san_pham }}</td>
                    <td>
                        <img src="{{ Storage::url($thuCung->hinh_anh) }}" width="100px" height="100px" alt="">
                    </td>
                    <td>{{ $thuCung->so_luong }}</td>
                    <td>{{ $thuCung->gia_san_pham }} VNĐ</td>
                    <td>{{ $thuCung->gia_khuyen_mai }} VNĐ</td>
                    <td>{{ $thuCung->ngay_nhap }}</td>
                    <td>{{ $thuCung->gioi_tinh == 0 ? 'Đực' : 'Cái' }}</td>
                    <td>{{ $thuCung->mo_ta }}</td>
                    <td>{{ $thuCung->ten_danh_muc }}</td>
                    <td>
                        <a href="{{ route('admin_sanpham.edit', $thuCung->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin_sanpham.destroy', $thuCung->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không')">
                                Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
