@extends('layouts.auth')
@section('title')
    Đăng ký
@endsection
@section('content')
    <div class="fxt-content">
        @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        @endif
        <h2>Đăng ký tài khoản mới</h2>
        <div class="fxt-form">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="text" id="ho_ten" class="form-control @error('ho_ten') is-invalid  @enderror" name="ho_ten" placeholder="Họ tên"
                            required="required" value="{{ old('ho_ten') }}">
                            @error('ho_ten')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="phone" id="so_dien_thoai" class="form-control @error('so_dien_thoai') is-invalid  @enderror" name="so_dien_thoai" placeholder="Số điện thoại"
                            required="required" value="{{ old('so_dien_thoai') }}">
                            @error('so_dien_thoai')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                        <input type="email" id="email" class="form-control @error('email') is-invalid  @enderror" name="email" placeholder="Email"
                             value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                        <input id="password" type="password" class="form-control" name="password" placeholder="********"
                            required="required">
                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                            @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <div class="fxt-checkbox-area">
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Ghi nhớ</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <button type="submit" class="fxt-btn-fill">Đăng ký</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="fxt-footer">
            <div class="fxt-transformY-50 fxt-transition-delay-9">
                <p>Bạn đã có tài khoản?<a href="{{ route('login') }}" class="switcher-text2 inline-text">Đăng nhập</a></p>
            </div>
        </div>
    </div>
@endsection
