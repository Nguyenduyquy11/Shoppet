@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection
@section('content')
    @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif
    <div class="table-title bg-primary text-white p-3">
        <h4 class="mb-0">Danh Sách Bình Luận</h4>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Tên người bình luận</th>
                <th>Nội Dung</th>
                <th>Thời gian</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listBinhLuan as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->sanPham->ten_san_pham }}</td>
                    <td>{{ $item->User->ho_ten }}</td>
                    <td>{{ $item->noi_dung}}</td>
                    <td>{{ $item->created_at}}</td>
                    <td>
                        <form action="{{ route('admin.binhluan.destroy', $item->id) }}" method="POST" 
                            onsubmit="return confirm('Bạn có muốn xóa không')">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
