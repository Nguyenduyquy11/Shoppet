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
        <h4 class="mb-0">Danh Sách Tài Khoản</h4>
    </div>
    <a href="{{ route('admintaikhoan.create') }}" class="btn btn-success ml-10 mt-3 mb-3">Thêm mới</a>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Ảnh đại diện</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Ngày sinh</th>
                <th>Mật khẩu</th>
                <th>Chức vụ</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listTaiKhoan as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        <img src="{{ Storage::url($item->anh_dai_dien) }}" alt="" width="100px" height="100px"></td>
                    <td>{{ $item->ho_ten }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->so_dien_thoai }}</td>
                    <td>{{ $item->gioi_tinh == 0 ? 'Nữ' : 'Nam'  }}</td>
                    <td>{{ $item->dia_chi }}</td>
                    <td>{{ $item->ngay_sinh }}</td>
                    <td>{{ $item->mat_khau }}</td>
                    <td>{{ $item->ten_chuc_vu }}</td>
                    <td>{{ $item->status == 0 ? 'Đang hoạt động' : 'Không hoạt động' }}</td>
                    <td>
                        <a href="{{ route('admintaikhoan.edit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
