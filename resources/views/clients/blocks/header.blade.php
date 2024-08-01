<nav class="navbar navbar-expand-lg bg-white font-sans-serif">
    <div class="container-xxl">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/clients/img/logo-thu-cung.png') }}" width="60px" height="60px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Đồ ăn thú cưng</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Thú cưng
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($danhMuc as $item)
                            <li><a class="dropdown-item" href="{{ route('sanphamdanhmuc', $item->id) }}">{{ $item->ten_danh_muc }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('/lienhe') }}">Liên hệ</a>
                </li>
            </ul>
            <form action="{{ route('/timkiem') }}" class="search-form d-flex align-items-center" method="GET">
                @csrf
                <input class="form-control me-2" name="search" type="search" placeholder="Tìm kiếm........" aria-label="Search">
                <button class="btn btn-success" type="submit">Tìm kiếm</button>
            </form>
            <div class="d-flex align-items-center ms-3">
                <!-- Biểu tượng giỏ hàng -->
                <a class="btn btn-light position-relative me-3" href="{{ route('giohang') }}">
                    <i class="bi bi-cart"></i>
                    <!-- Thông báo số lượng sản phẩm trong giỏ hàng -->
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ session('cart') ? count(session('cart')) : '0' }}
                    </span>
                </a>
                <!-- Biểu tượng người dùng -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        @auth
                            @if (Auth::user()->chuc_vu_id == 1)
                                <li><a class="dropdown-item" href="{{ route('admin.dasboard') }}">
                                    <button class="btn bg-white">Đăng nhập admin</button>
                                </a></li>
                            @endif
                                <li><a class="dropdown-item" href="{{ route('/nguoidung', Auth::user()->id) }}">
                                    <button class="btn bg-white">Hồ sơ</button>
                                </a></li>
                                <li><a class="dropdown-item" href="{{ route('donhang.index') }}">
                                    <button class="btn bg-white">Đơn hàng của tôi</button>
                                </a></li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <li><a class="dropdown-item" href="">
                                        <button class="btn bg-white">Đăng xuất</button>
                                    </a></li>
                                </form>
                            @else
                            <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a></li>
                            
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
