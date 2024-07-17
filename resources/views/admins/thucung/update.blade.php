@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Sửa Thông Tin Thú Cưng</h3>
            </div>
            <form action="{{ route('admin_sanpham.update', $thuCung->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên thú cưng</label>
                        <input type="text" class="form-control @error('ten_san_pham') is-invalid @enderror"
                            placeholder="Enter name" name="ten_san_pham" value="{{ $thuCung->ten_san_pham }}">
                        @error('ten_san_pham')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Hình ảnh</label>
                        <input type="file" class="form-control" placeholder="Image" name="hinh_anh"><br>
                        <img src="{{ Storage::url($thuCung->hinh_anh) }}" alt="Ảnh thú cưng" width="150px">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số lượng</label>
                        <input type="number" class="form-control @error('so_luong') is-invalid @enderror"
                            placeholder="số lượng" name="so_luong" min="0" value="{{ $thuCung->so_luong }}">
                        @error('so_luong')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giá sản phẩm</label>
                        <input type="number" class="form-control @error('gia_san_pham') is-invalid @enderror"
                            name="gia_san_pham" value="{{ $thuCung->gia_san_pham }}">
                        @error('gia_san_pham')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giá khuyến mãi</label>
                        <input type="number" class="form-control @error('gia_khuyen_mai') is-invalid @enderror"
                            name="gia_khuyen_mai" value="{{ $thuCung->gia_khuyen_mai }}">
                        @error('gia_khuyen_mai')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày nhập</label>
                        <input type="date" class="form-control @error('ngay_nhap') is-invalid @enderror" name="ngay_nhap"
                            value="{{ $thuCung->ngay_nhap }}">
                        @error('ngay_nhap')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label>
                        <textarea name="mo_ta" class="form-control" cols="30" rows="10">{{ $thuCung->mo_ta }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giới tính</label>
                        <select name="gioi_tinh" class="form-control @error('gioi_tinh') is-invalid @enderror">
                            <option value="0" {{ $thuCung->gioi_tinh == 0 ? 'selected' : '' }}>Đực</option>
                            <option value="1" {{ $thuCung->gioi_tinh == 1 ? 'selected' : '' }}>Cái</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Danh mục</label>
                        <select name="danh_muc_id" class="form-control @error('danh_muc_id') is-invalid @enderror">
                            @foreach ($listDanhMuc as $item)
                                {{-- <option value="{{ $thuCung->danh_muc_id }}" {{$thuCung->danh_muc_id == $item->id ? "selected" : ""}}>{{ $thuCung-> }}</option> --}}
                                @if ($thuCung->danh_muc_id == $item->id)
                                    <option value="{{ $item->id }}" selected>{{ $item->ten_danh_muc }} </option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->ten_danh_muc }} </option>
                                @endif
                            @endforeach
                        </select>
                        @error('danh_muc_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-warning">Sửa</button>
                </div>
            </form>
        </div>
    </div>
@endsection
