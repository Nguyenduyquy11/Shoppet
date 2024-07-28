@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="container mt-5">
        <h2>Liên Hệ</h2>
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        <form action="{{ route('addlienhe') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control @error('ho_ten') is-invalid @enderror" name="ho_ten" id="name"
                    placeholder="Nhập tên của bạn" value="{{ old('ho_ten') }}">
                @error('ho_ten')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="email" placeholder="Nhập email của bạn" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="subject">Số điện thoại:</label>
                <input type="phone" class="form-control @error('so_dien_thoai') is-invalid @enderror" name="so_dien_thoai"
                    id="subject" placeholder="Nhập số điện thoại" value="{{ old('so_dien_thoai') }}">
                @error('so_dien_thoai')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">Nội dung:</label>
                <textarea class="form-control @error('noi_dung') is-invalid @enderror" name="noi_dung" id="message" rows="5"
                    placeholder="Nhập nội dung" value="{{ old('noi_dung') }}"></textarea>
                @error('noi_dung')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br><button type="submit" class="btn btn-outline-primary">Gửi liên hệ</button>
                <input type="reset" class="btn btn-outline-dark" value="Nhập lại"></input>
        </form>
    </div>
@endsection
