@extends('layouts.admin')

@section('title')
    {{$title}}
@endsection
@section('content')
        <div class="table-title bg-primary text-white p-3">
            <h4 class="mb-0">Danh Sách Thú Cưng</h4>
        </div>
        <a href="{{ route('adminsanpham.create') }}" class="btn btn-success ml-10 mt-3 mb-3">Thêm mới</a>
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
                    <th>giới tính</th>
                    <th>giống loài</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listThuCung as $index => $thuCung)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $thuCung->ten_san_pham }}</td>
                        <td>{{ $thuCung->hinh_anh }}</td>
                        <td>{{ $thuCung->so_luong }}</td>
                        <td>{{ $thuCung->gia_san_pham }}</td>
                        <td>{{ $thuCung->gia_khuyen_mai }}</td>
                        <td>{{ $thuCung->ngay_nhap }}</td>
                        <td>{{ $thuCung->mo_ta }}</td>
                        <td>{{ $thuCung->gioi_tinh }}</td>
                        <td>{{ $thuCung->danh_muc_id }}</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection
