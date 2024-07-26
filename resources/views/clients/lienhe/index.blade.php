@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')
<div class="container mt-5">
    <h2>Liên Hệ</h2>
    <form>
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên của bạn">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn">
        </div>
        <div class="form-group">
            <label for="subject">Chủ đề:</label>
            <input type="phone" class="form-control" id="subject" placeholder="Nhập số điện thoại">
        </div>
        <div class="form-group">
            <label for="message">Nội dung:</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Nhập nội dung"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</div>
@endsection