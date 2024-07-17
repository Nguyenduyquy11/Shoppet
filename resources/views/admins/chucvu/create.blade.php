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
            <form action="{{ route('admin_chucvu.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên chức vụ</label>
                        <input type="text" class="form-control @error('ten_chuc_vu') is-invalid @enderror"
                            name="ten_chuc_vu" value="{{ old('ten_chuc_vu')}}">
                        @error('ten_chuc_vu')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
