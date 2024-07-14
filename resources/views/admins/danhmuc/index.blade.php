@extends('layouts.admin')

@section('title')
    {{$title}}
@endsection
@section('content')
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-title bg-primary text-white p-3">
            <h4 class="mb-0">Danh Sách Danh Mục</h4>
        </div>
        <a href="{{ route('admindanhmuc.create') }}" class="btn btn-success ml-10 mt-3 mb-3">Thêm mới</a>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>STT</th>
                    <th>Tên Danh Mục</th>
                    <th>Mô Tả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td>qd</td>
                        <td>ddaq</td>
                        <td>qd</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Sửa</a>
                            <a href="#" class="btn btn-danger btn-sm">Xóa</a>
                        </td>
                    </tr>
                
            </tbody>
        </table>

@endsection
