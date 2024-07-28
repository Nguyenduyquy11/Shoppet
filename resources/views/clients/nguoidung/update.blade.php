@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Thông Tin Người Dùng</h3>
                </div>
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('/capnhat.nguoidung', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="userAddress">Ảnh đai diện</label>
                            <input type="file" name="anh_dai_dien" class="form-control" id="userAddress">
                        </div>
                        <div class="form-group">
                            <label for="userName">Tên</label>
                            <input type="text" class="form-control" name="ho_ten" id="userName" value="{{ $user->ho_ten }}">
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Email</label>
                            <input type="email" class="form-control" name="email" id="userEmail" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Giới tính</label>
                            <select name="gioi_tinh" id="" class="form-control">
                                <option value="" {{ is_null($user->gioi_tinh) ? 'selected' : '' }}>--- Chọn giới tính ---</option>
                                <option value="0" {{ $user->gioi_tinh === 0 ? 'selected' : '' }}>Nam</option>
                                <option value="1" {{ $user->gioi_tinh === 1 ? 'selected' : '' }}>Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Địa chỉ</label>
                            <input type="text" class="form-control" name="dia_chi" id="userEmail" value="{{ $user->dia_chi }}">
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Ngày sinh</label>
                            <input type="date" class="form-control" name="ngay_sinh" id="userEmail" value="{{ $user->ngay_sinh }}">
                        </div>
                        <div class="form-group">
                            <label for="userPhone">Số điện thoại</label>
                            <input type="tel" class="form-control" name="so_dien_thoai" id="userPhone" value="{{ $user->so_dien_thoai }}">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary btn-custom">Lưu</button>
                            <a href="{{ route('/nguoidung', $user->id) }}" class="btn btn-secondary btn-custom">Quay lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection