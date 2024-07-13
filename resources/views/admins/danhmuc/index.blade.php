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
                <th>tên loài</th>
                <th>mô tả</th>              
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>qưewq</td>
                <td>qưeqw</td>
                <td>qưeqw</td>              
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