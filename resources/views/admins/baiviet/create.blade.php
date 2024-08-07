@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thêm Chức Vụ</h3>
            </div>
            <form action="{{ route('admin.baiviet.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tiêu đề</label>
                        <input type="text" class="form-control @error('tieu_de') is-invalid @enderror" name="tieu_de"
                            value="{{ old('tieu_de') }}">
                        @error('tieu_de')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh</label>
                        <input type="file" class="form-control" name="hinh_anh">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nội dung </label>
                        <textarea name="noi_dung" class="form-control" cols="30" rows="10">{{ old('noi_dung') }}</textarea>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Đăng</button>
                </div>
            </form>
        </div>
    </div>
@endsection
