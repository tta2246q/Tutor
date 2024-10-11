<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="wedsite icon" type="jpg"
        href="https://th.bing.com/th?q=%e1%ba%a2nh+M%c3%a8o+Cute&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=VN&setlang=vi&adlt=moderate&t=1&mw=247">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
</head>

<body class="body">
    <header class="bg-dark">
        <div class="container d-flex justify-content-between align-items-center py-2 ">
            <a class="navbar-brand text-white" href="#">Logo</a>
            <div class="d-flex align-items-center">
                <button class="btn profile-btn" type="button" style="color: white;">
                    T
                </button>
                <div class="dropdown ms-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Anh
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                        <a class="dropdown-item text-dark" href="#">Profile</a>
                        <a class="dropdown-item text-dark" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-dark" href="#">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    
        <hr>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid d-flex justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chúng tôi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="parentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Phụ huynh
                            </a>
                            <div class="dropdown-menu" aria-labelledby="parentDropdown">
                                <a class="dropdown-item" href="#">Yêu cầu tìm gia sư</a>
                                <a class="dropdown-item" href="#">Xem gia sư hiênj có</a>
                                <a class="dropdown-item" href="#">Thông tin cho phụ huynh</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="tutorDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gia sư
                            </a>
                            <div class="dropdown-menu" aria-labelledby="tutorDropdown">
                                <a class="dropdown-item" href="#">Đăng kí làm gia sư</a>
                                <a class="dropdown-item" href="#">Lớp đang tìm gia sư</a>
                                <a class="dropdown-item" href="#">Thông tin cho gia sư</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tài liệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    
    <main >
        @yield('content')
    </main>
    <footer>
        <footer class="footer bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Logo</h5>
                        <p>Công ty cổ phần .........</p>
                        <p>©Copyright 2022 gia su. All Rights Reserved</p>
                    </div>
        
                    <div class="col-md-4">
                        <h5>Liên hệ</h5>
                        <p>Số điện thoại: xxxxxxxxxxxxxx</p>
                        <p>Email: xxxxxxxxxxxxxx</p>
                        <p>Địa chỉ: xxxxxxxxxxxxxx</p>
                    </div>
        
                    <div class="col-md-2">
                        <h5>THÔNG TIN</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Điều khoản sử dụng</a></li>
                            <li><a href="#" class="text-white">Quyền riêng tư</a></li>
                        </ul>
                    </div>
        
                    <div class="col-md-2">
                        <h5>Chấp nhận thanh toán</h5>
                        <img src="acb-logo.png" alt="ACB" class="img-fluid mb-2">
                        <img src="bidv-logo.png" alt="BIDV" class="img-fluid">
                        <h5>Kết nối với chúng tôi</h5>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="/js/owl.carousel.js"></script>

        <script src="/js/style.js" defer></script>

    </footer>
</body>

</html>
