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
        <h4 class="mb-0"> {{ $title }}</h4>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>STT</th>
                <th>Họ tên người liên hệ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Nội dung liên hệ</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listLienHe as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{$item->ho_ten}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->so_dien_thoai}}</td>
                    <td>{{$item->noi_dung}}</td>
                    <td>{{$item->trang_thai == 1 ? 'Chưa liên hệ' : 'Đã liên hệ'}}</td>
                    <td>
                        <a href="{{ route('admin.lienhe.edit', $item->id) }}">
                            <button class="btn btn-warning">Cập nhật</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
