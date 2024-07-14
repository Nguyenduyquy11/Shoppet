@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thêm Thú Cưng</h3>
            </div>
            <form action="{{ route('adminsanpham.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên thú cưng</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name"
                            name="ten_san_pham">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Hình ảnh</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Image"
                            name="hinh_anh">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số lượng</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="số lượng"
                            name="so_luong" min="0">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giá sản phẩm</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="gia_san_pham">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giá khuyến mãi</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="gia_khuyen_mai">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày nhập</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" name="ngay_nhap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả</label>
                        <textarea name="mo_ta" id="exampleInputPassword1" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giới tính</label>
                        <select name="gioi_tinh" id="" class="form-control">
                            <option value="0">Đực</option>
                            <option value="1">Cái</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Danh mục</label>
                        <select name="danh_muc_id"  class="form-control">
                            <option>Danh mục thú cưng </option>
                            @foreach ($listDanhMuc as $item)
                                <option value="{{ $item->id }}">{{ $item->ten_danh_muc }}</option>
                            @endforeach                    
                        </select>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
