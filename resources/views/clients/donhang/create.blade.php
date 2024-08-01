@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection



@section('content')
    <div class="container mt-5">
        <form action="{{ route('donhang.store') }}" method="POST">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="order-form">
                    <h2 class="mb-4">Đặt Hàng</h2>
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Tên người nhận</label>
                            <input type="text" class="form-control" name="ten_nguoi_nhan"
                                value="{{ Auth::user()->ho_ten }}" placeholder="Nhập tên người nhận">
                            @error('ten_nguoi_nhan')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Email người nhận</label>
                            <input type="email" class="form-control" name="email_nguoi_nhan"
                                value="{{ Auth::user()->email }}" placeholder="Nhập email người nhận">
                            @error('email_nguoi_nhan')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Số điện thoại người nhận</label>
                            <input type="text" class="form-control" name="so_dien_thoai_nguoi_nhan"
                                value="{{ Auth::user()->so_dien_thoai }}" placeholder="Nhập số điện thoại người nhận">
                            @error('so_dien_thoai_nguoi_nhan')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="customerName" class="form-label">Địa chỉ người nhận</label>
                            <input type="text" class="form-control" name="dia_chi_nguoi_nhan"
                                placeholder="Nhập địa chỉ người nhận" value="{{ Auth::user()->dia_chi }}">
                            @error('dia_chi_nguoi_nhan')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="deliveryAddress" class="form-label">Ghi chú</label>
                            <textarea class="form-control" name="ghi_chu" rows="3" placeholder="Nhập ghi chú"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phương Thức Thanh Toán</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="paymentMethod" id="paymentMethod1"
                                    value="cash_on_delivery">
                                <label class="form-check-label" for="paymentMethod1">
                                    Thanh toán khi giao hàng
                                </label>
                            </div>
                        </div>
                        
                </div>
            </div>
            <div class="col-md-6">
                <div class="order-form">
                    <h3 class="mb-4">Tóm Tắt Đơn Hàng</h3>
                    @foreach ($cart as $key => $item)
                        <div class="mb-3">
                            <p><strong>Tên Sản Phẩm:</strong> {{ $item['ten_san_pham'] }}</p>
                            <p><strong>Giá sản phẩm:</strong> {{ number_format($item['gia'] * $item['so_luong'], 0, '', '.') }} đ</p>
                            <p><strong>Số Lượng:</strong> <span id="summaryQuantity">{{ $item['so_luong'] }}</span></p>
                            <p>
                                <strong>Tổng phụ:</strong> {{ number_format($subTotal, 0, '', '.') }} đ
                                <input type="hidden" name="tien_hang" value="{{ $subTotal }}"> 
                            </p>
                            <p>
                                <strong>Phí giao hàng:</strong> {{ number_format($shipping, 0, '', '.') }} đ
                                <input type="hidden" name="tien_ship" value="{{ $shipping }}"> 
                            </p>
                            <p>
                                <strong>Tổng Cộng:</strong> <b class="text-danger" id="summaryTotal">{{ number_format($total, 0, '', '.') }} đ</b>                                <input type="hidden" name="tien_hang" value="{{ $subTotal }}"> 
                                <input type="hidden" name="tong_tien" value="{{ $total }}"> 
                            </p>
                        </div>
                        <hr>
                    @endforeach
                    <button type="submit" class="btn btn-outline-success">Gửi Đơn Hàng</button>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection
@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('quantity').addEventListener('input', function() {
            const price = 100; // Giá sản phẩm
            const quantity = parseInt(this.value);
            const total = price * quantity;
            document.getElementById('summaryQuantity').textContent = quantity;
            document.getElementById('summaryTotal').textContent = `$${total.toFixed(2)}`;
        });
    </script>
@endsection
