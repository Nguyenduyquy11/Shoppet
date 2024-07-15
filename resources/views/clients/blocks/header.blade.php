<nav class=" navbar navbar-expand-lg bg-warning font-sans-serif">
    <div class="container-xxl">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/clients/img/logo-thu-cung.png') }}" width="60px"
                height="60px" alt=""></a>
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
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://thietkewebwio.com/wp-content/uploads/website/banner-website-1-1400x787.webp"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://thietkewebwio.com/wp-content/uploads/website/banner-website-1-1400x787.webp"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://thietkewebwio.com/wp-content/uploads/website/banner-website-1-1400x787.webp"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="size">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 1.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 2.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 3</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 3.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 4</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 4.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 4</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 4.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 4</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 4.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 1.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 2.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 3</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 3.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 4</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 4.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 4</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 4.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 4</h5>
                            <p class="card-text">Mô tả ngắn gọn về sản phẩm 4.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
