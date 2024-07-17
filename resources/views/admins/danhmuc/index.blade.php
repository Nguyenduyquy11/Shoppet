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
        <a href="{{ route('admin_danhmuc.create') }}" class="btn btn-success ml-10 mt-3 mb-3">Thêm mới</a>
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
                @foreach ($listDanhMuc as $index => $item)
                    <tr>
                        <td>{{ $index +1 }}</td>
                        <td>{{ $item->ten_danh_muc }}</td>
                        <td>{{ $item->mo_ta }}</td>
                        <td>
                            <a href="{{ route('admin_danhmuc.edit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                            <form action="{{ route('admin_danhmuc.destroy', $item->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <br><button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không?')">
                                    Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection
