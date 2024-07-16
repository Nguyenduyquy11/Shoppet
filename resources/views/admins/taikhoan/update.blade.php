@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Chỉnh Sửa Tài Khoản</h3>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ảnh đại diện</label>
                        <input type="file" class="form-control" 
                            name="anh_dai_dien">
                        <br><img src="{{ Storage::url($deTailTaiKhoan->anh_dai_dien) }}" width="100px" height="100px" alt="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Họ tên</label>
                        <input type="text" class="form-control"  placeholder="Nhập họ và tên"
                            name="ho_ten" value="{{ $deTailTaiKhoan->ho_ten }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control"  placeholder="Nhập email"
                            name="email" value="{{ $deTailTaiKhoan->email }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số điện thoại</label>
                        <input type="number" class="form-control"  placeholder="Nhập số điện thoại"
                            name="so_dien_thoai" min="0" value="{{ $deTailTaiKhoan->so_dien_thoai }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giới tính</label>
                        <select name="gioi_tinh" id="" class="form-control" >
                            <option value="0" {{ $deTailTaiKhoan->gioi_tinh == 0 ? 'selected' : '' }}>Nam</option>
                            <option value="1" {{ $deTailTaiKhoan->gioi_tinh == 1 ? 'selected' : '' }}>Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                       <input type="text" class="form-control" name="mat_khau" value="{{ $deTailTaiKhoan->mat_khau }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="text" class="form-control"  name="dia_chi" value="{{ $deTailTaiKhoan->dia_chi }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày sinh</label>
                        <input type="date" class="form-control"  name="ngay_sinh" value="{{ $deTailTaiKhoan->ngay_sinh }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Chức vụ</label>
                        <select name="gioi_tinh"  class="form-control">
                            <option value="1" {{ $deTailTaiKhoan->chuc_vu_id == 1 ? 'selected' : '' }}>Khách hàng</option>
                            <option value="2" {{ $deTailTaiKhoan->chuc_vu_id == 2 ? 'selected' : '' }}>Quản lý</option>
                            <option value="2" {{ $deTailTaiKhoan->chuc_vu_id == 3 ? 'selected' : '' }}>Nhân viên</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <select name="gioi_tinh"  class="form-control">
                            <option value="0" {{ $deTailTaiKhoan->status == 0 ? 'selected' : '' }}>Đang hoạt động</option>
                            <option value="1" {{ $deTailTaiKhoan->status == 1 ? 'selected' : '' }}>Không hoạt động</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
@endsection
