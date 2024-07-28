@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Sửa Danh Mục Thú Cưng</h3>
            </div>
            <form action="{{ route('admin.danhmuc.update', $danhMuc->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục thú cưng</label>
                        <input type="text" class="form-control @error('ten_danh_muc') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Enter name" name="ten_danh_muc"
                            value="{{ $danhMuc->ten_danh_muc }}">
                        @error('ten_danh_muc')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh danh mục thú cưng</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" name="anh_danh_muc">
                    </div>
                    <img src="{{ Storage::url($danhMuc->anh_danh_muc) }}" width="100px" height="100px" alt="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label>
                        <textarea name="mo_ta" id="exampleInputEmail1" class="form-control" cols="30" rows="10">{{ $danhMuc->mo_ta }}</textarea>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-warning">Sửa Danh Mục</button>
                </div>
            </form>
        </div>
    </div>
@endsection
