<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>

<body>
    <header>
        @include('clients.blocks.header')
    </header>
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
                <img src="https://thietkewebwio.com/wp-content/uploads/website/banner-website-1-1400x787.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://thietkewebwio.com/wp-content/uploads/website/banner-website-1-1400x787.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://thietkewebwio.com/wp-content/uploads/website/banner-website-1-1400x787.webp" class="d-block w-100" alt="...">
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
    <main>
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
    </main>
    <footer>
        @include('clients.blocks.footer')
    </footer>
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
