@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Thêm Tài Khoản</h3>
            </div>
            <form action="{{ route('admin_taikhoan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh đại diện</label>
                        <input type="file" class="form-control" 
                            name="anh_dai_dien">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Họ tên</label>
                        <input type="text" class="form-control"  placeholder="Nhập họ và tên"
                            name="ho_ten">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control"  placeholder="Nhập email"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số điện thoại</label>
                        <input type="number" class="form-control"  placeholder="Nhập số điện thoại"
                            name="so_dien_thoai" min="0">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giới tính</label>
                        <select name="gioi_tinh" id="" class="form-control">
                            <option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                       <input type="text" class="form-control" name="mat_khau">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="text" class="form-control"  name="dia_chi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày sinh</label>
                        <input type="date" class="form-control"  name="ngay_sinh">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <select name="status"  class="form-control">
                            <option value="0">Đang hoạt động</option>
                            <option value="1">Không hoạt động</option>
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
