@extends('layouts.admin')
@section('list')

<div class="table-wrapper table2 ">
    <a href="#" class="btn btn-success ml-10 mb-3">Thêm mới</a>
    <div class="table-title bg-primary text-white p-3">
        <h4 class="mb-0">Danh Sách Thú Cưng</h4>
    </div>

    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Ảnh Thú Cưng</th>
                <th>Tên Thú Cưng</th>
                <th>Độ tuổi</th>
                <th>Giới tính</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Mô Tả</th>
                <th>Ngày đăng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listThuCung as $index => $item)
            <tr>
                <td>{{ $index +1 }}</td>
                <td> {{ $item->anh_thu_cung }} </td>
                <td> {{ $item->ten_thu_cung }} </td>
                <td>{{ $item->tuoi }}</td>
                <td>{{ $item->gioi_tinh }}</td>
                <td>{{ $item->gia }}</td>
                <td>{{ $item->so_luong }}</td>
                <td>{{ $item->mo_ta }}</td>
                <td>{{ $item->ngay_dang }}</td>
                <td>
                    <a href="#" class="btn btn-info btn-sm">Chi Tiết</a>
                    <a href="#" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection