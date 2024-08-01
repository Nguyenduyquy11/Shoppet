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
        <h4 class="mb-0">Danh Sách Chức Vụ</h4>
    </div>
    <a href="{{ route('admin.chucvu.create') }}" class="btn btn-success ml-10 mt-3 mb-3">Thêm mới</a>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Tên chức vụ</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listChucVu as $index => $item)
                <tr>
                    <td> {{ $index +1 }} </td>
                    <td> {{ $item->ten_chuc_vu }} </td>
                    <td>
                        <a href="{{ route('admin.chucvu.edit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.chucvu.destroy', $item->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không?')">
                                Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
