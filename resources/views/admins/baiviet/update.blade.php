@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <form action="{{ route('admin.baiviet.update', $baiViet->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tiêu đề</label>
                        <input type="text" class="form-control @error('tieu_de') is-invalid @enderror" name="tieu_de"
                            value="{{ $baiViet->tieu_de }}">
                        @error('tieu_de')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh</label>
                        <input type="file" class="form-control" name="hinh_anh">
                    </div>
                    <img src="{{ Storage::url($baiViet->hinh_anh) }}" width="150px" alt="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nội dung </label>
                        <textarea name="noi_dung" class="form-control" cols="30" rows="10">{{ $baiViet->noi_dung }}</textarea>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
@endsection
