@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection
@section('content')
    <div class="container mt-4">
        <!-- Phần nội dung chi tiết sản phẩm -->
        <div class="row">
            <!-- Ảnh và mô tả sản phẩm -->
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ Storage::url($sanPhamDeTail->hinh_anh) }}" class="card-img-top" alt="" width="200px"
                        height="500px">
                    <div class="card-body">
                        <h3>Mô tả ngắn thú cưng</h3>
                        <p class="card-text">{{ $sanPhamDeTail->mo_ta }}</p>
                    </div>
                </div>
            </div>

            <!-- Thông tin sản phẩm -->
            <div class="col-md-6">
                <br>
                @if (session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">{{ $sanPhamDeTail->ten_san_pham }}</h1>
                        <h3>
                            @if ($sanPhamDeTail->gia_khuyen_mai)
                                <strong><span class="text-danger">{{ number_format($sanPhamDeTail->gia_khuyen_mai) }}
                                        đ</span><br></strong>
                                <h5><del>{{ number_format($sanPhamDeTail->gia_san_pham) }} đ</del></h5>
                            @else
                                <h5><del>{{ number_format($sanPhamDeTail->gia_san_pham) }} đ</del></h5>
                            @endif
                        </h3>
                        <form action="{{ route('themvaogiohang') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Số lượng</label>
                                <input type="number" name="so_luong" class="form-control" value="1" min="1"
                                    max="100">
                                <input type="hidden" name="san_pham_id" value="{{ $sanPhamDeTail->id }}">
                            </div>
                            <button type="submit" class="btn btn-outline-info ">Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bình luận và form bình luận -->
<div class="row mt-4">
    <div class="col-12">
        <h3>Bình luận</h3>
        <div class="card">
            <div class="card-body">
                <!-- Hiển thị các bình luận -->
                @foreach ($sanPhamDeTail->binhLuan as $comment)
                    <div class="mb-3 d-flex">
                        <img src="{{ storage::url($comment->User->anh_dai_dien) }}" alt="Avatar" width="40" height="40" class="rounded-circle me-3">
                        <div>
                            <strong>{{ $comment->User->ho_ten }}</strong>
                            <p>{{ $comment->noi_dung }}</p>
                            <small class="text-muted">Đã bình luận vào: {{ $comment->created_at->format('d/m/Y H:i') }}</small>
                        </div>
                    </div>
                    <hr>
                @endforeach

                <!-- Hiển thị form bình luận nếu người dùng đã đăng nhập -->
                @if ($userId)
                    <form action="{{ route('binhluan') }}" method="POST">
                        @csrf
                        <input type="hidden" name="san_pham_id" value="{{ $sanPhamDeTail->id }}">
                        <input type="hidden" name="user_id" value="{{ $userId }}">
                        <div class="d-flex align-items-start">
                            <div class="w-100">
                                <textarea name="noi_dung" class="form-control mb-2" rows="3" placeholder="Nhập bình luận của bạn"></textarea>
                                <button type="submit" class="btn btn-primary">Bình luận</button>
                            </div>
                        </div>
                    </form>
                @else
                    <p>Bạn muốn để lại bình luận về sản phẩm ư?</p>
                    <p>Hãy <a class="text-decoration-none" href="{{ route('login') }}">đăng nhập</a> để bình luận.</p>
                @endif
            </div>
        </div>
    </div>
</div>
        <!-- Sản phẩm liên quan -->
        <div class="row mt-4">
            <div class="col-12">
                <h3>Sản phẩm liên quan</h3>
                <div class="row">
                    @foreach ($sanPhamLienQuan as $item)
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <img src="{{ Storage::url($item->hinh_anh) }}" class="card-img-top" alt=""
                                    width="150px" height="250px">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->ten_san_pham }}</h5>
                                    <p class="card-text">
                                        @if ($item->gia_khuyen_mai)
                                            <span class="text-danger">{{ number_format($item->gia_khuyen_mai) }} đ</span>
                                            <del>{{ number_format($item->gia_san_pham) }} đ</del>
                                        @else
                                            <span>{{ number_format($item->gia_san_pham) }} đ</span>
                                        @endif
                                    </p>
                                    <form action="{{ route('themvaogiohang') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="so_luong" value="1">
                                        <input type="hidden" name="san_pham_id" value="{{ $item->id }}">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('chitiet', $item->id) }}" class="btn btn-outline-primary">Chi
                                                tiết</a>
                                            <button class="btn btn-outline-success">
                                                <i class="fas fa-shopping-cart"></i>Thêm vào giỏ hàng
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- {{ $sanPhamLienQuan->links('pagination::bootstrap-5') }} --}}
            </div>
        </div>
    </div>
@endsection
