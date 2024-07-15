@extends('layouts.admin')
@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Chỉnh Sửa Chức Vụ</h3>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên chức vụ</label>
                        <input type="text" class="form-control" 
                            name="ten_chuc_vu" value="{{ $detaiChucVu->ten_chuc_vu }}">
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
@endsection