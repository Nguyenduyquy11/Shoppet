@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thêm Danh Mục Thú Cưng</h3>
            </div>
            <form action="{{ route('admin.danhmuc.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục thú cưng</label>
                        <input type="text" class="form-control @error('ten_danh_muc') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Enter name" name="ten_danh_muc"
                            value="{{ old('ten_danh_muc') }}">
                        @error('ten_danh_muc')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả </label>
                        <textarea name="mo_ta" class="form-control" id="exampleInputPassword1" cols="30" rows="10">{{ old('mo_ta') }}</textarea>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
