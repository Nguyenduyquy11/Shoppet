
<nav class=" navbar navbar-expand-lg bg-warning font-sans-serif">
    <div class="container-xxl">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/clients/img/logo-thu-cung.png') }}" width="60px" height="60px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
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
                        <li><a class="dropdown-item" href="#">Chó</a></li>
                        <li><a class="dropdown-item" href="#">Mèo</a></li>
                        <li><a class="dropdown-item" href="#">Rắn</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Liên hệ</a>
                </li>
            </ul>
            <form class="search-form d-flex align-items-center">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm........" aria-label="Search">
                <button class="btn btn-success" type="submit">Tìm kiếm</button>
            </form>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                    <li><a class="dropdown-item" href="#">Đăng ký</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
