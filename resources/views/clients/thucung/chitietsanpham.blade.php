@extends('layouts.client')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Ảnh và mô tả sản phẩm -->
        <div class="col-md-6">
            <div class="card">
                <img src="{{ Storage::url($sanPhamDeTail->hinh_anh) }}" class="card-img-top" alt="" width="200px" height="500px">
                <div class="card-body">
                    <h3>Mô tả ngắn thú cưng</h3>
                    <p class="card-text">{{ $sanPhamDeTail->mo_ta }}</p>
                </div>
            </div>
        </div>
        
        <!-- Thông tin sản phẩm -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">{{ $sanPhamDeTail->ten_san_pham }}</h1>
                    <h3>
                        @if($sanPhamDeTail->gia_khuyen_mai)
                            <strong><span class="text-danger">{{ number_format($sanPhamDeTail->gia_khuyen_mai) }} đ</span><br></strong>
                            <h5><del>{{ number_format($sanPhamDeTail->gia_san_pham) }} đ</del></h5>
                        @else
                            <h5><del>{{ number_format($sanPhamDeTail->gia_san_pham) }} đ</del></h5>
                        @endif
                    </h3>
                    <form action="" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Số lượng</label>
                            <input type="number" name="quantity" class="form-control" value="1" min="1" max="100">
                        </div>
                        <button class="btn btn-success w-100" type="submit">Thêm vào giỏ hàng</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sản phẩm liên quan -->
    {{-- <div class="row mt-4">
        <div class="col-12">
            <h3>Sản phẩm liên quan</h3>
            <div class="row">
                @foreach($relatedProducts as $relatedProduct)
                    <div class="col-md-3">
                        <div class="card mb-4">
                            <img src="{{ $relatedProduct->image }}" class="card-img-top" alt="{{ $relatedProduct->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $relatedProduct->name }}</h5>
                                <p class="card-text">
                                    @if($relatedProduct->discount_price)
                                        <span class="text-danger">{{ number_format($relatedProduct->discount_price) }} VND</span>
                                        <del>{{ number_format($relatedProduct->price) }} VND</del>
                                    @else
                                        <span>{{ number_format($relatedProduct->price) }} VND</span>
                                    @endif
                                </p>
                                <a href="{{ route('product.show', $relatedProduct->id) }}" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
</div>
@endsection
