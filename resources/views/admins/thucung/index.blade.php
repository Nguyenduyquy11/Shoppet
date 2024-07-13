@extends('layouts.admin')
@section('list')
<div class="content-wrapper">
    <div class="table-title bg-primary text-white p-3">
        <h4 class="mb-0">Danh Sách Thú Cưng</h4>
    </div>
    <a href="#" class="btn btn-success ml-10 mt-3 mb-3">Thêm mới</a>
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

            <tr>
                <td>gẻgr</td>
                <td> r323r </td>
                <td> 23r32r23 </td>
                <td>32r23r2</td>
                <td>23r23</td>
                <td>23r23</td>
                <td>23r23</td>
                <td>3r2r32</td>
                <td>23r23r2</td>
                <td>23r23r2</td>
                <td>23r23r2</td>
                <td>
                    <!-- <a href="#" class="btn btn-info btn-sm">Chi Tiết</a> -->
                    <a href="#" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>

        </tbody>
    </table>


</div>

@endsection