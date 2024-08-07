@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <a href="">Xem ngay</a>
        </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-success">
            {{ session('danger') }}
        </div>
    @endif
    <div class="table-title bg-primary text-white p-3">
        <h4 class="mb-0">Danh Sách Chức Vụ</h4>
    </div>
    <a href="{{ route('admin.baiviet.create') }}" class="btn btn-success ml-10 mt-3 mb-3">Đăng bài viết</a>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Hình ảnh</th>
                <th>Nội dung</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listBaiViet as $index => $item)
                <tr>
                    <td> {{ $index +1 }} </td>
                    <td> {{ $item->tieu_de }} </td>
                    <td>
                        <img src="{{ Storage::url($item->hinh_anh) }}" width="150px" alt="">
                    </td>
                    <td> {{ $item->noi_dung }} </td>
                    <td>
                        <a href="{{ route('admin.baiviet.edit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.baiviet.destroy', $item->id) }}" method="POST" class="d-inline">
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
