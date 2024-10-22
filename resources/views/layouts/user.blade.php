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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>

<body class="bg-light">
    <header class="body-head bg-dark">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <a class="navbar-brand text-light" href="#">Logo</a>
            <div class="d-flex align-items-center">
                <button class="btn profile-btn" type="button">
                    T
                </button>
                <div class="dropdown ms-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Anh
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid d-flex justify-content-center">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="http://127.0.0.1:8000/">Trang chủ</a>
                            </li>
                            <li class="nav-item " >
                                <a class="nav-link" href="http://127.0.0.1:8000/we">Chúng tôi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://127.0.0.1:8000/parents" id="parentDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Phụ huynh
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="parentDropdown">
                                    <li><a class="dropdown-item" href="http://127.0.0.1:8000/search_tutor">Yêu cầu tìm gia sư</a></li>
                                    <li><a class="dropdown-item" href="http://127.0.0.1:8000/Existing_tutors">Gia sư hiện có</a></li>
                                    <li><a class="dropdown-item" href="#">Thông tin cho phụ huynh</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="tutorDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Gia sư
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="tutorDropdown">
                                    <li><a class="dropdown-item" href="#">Đăng kí làm gia sư</a></li>
                                    <li><a class="dropdown-item" href="#">Lớp đang tìm gia sư</a></li>
                                    <li><a class="dropdown-item" href="#">Thông tin cho gia sư</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/document">Tài liệu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>
        @yield('content')
    </main>
    <footer class="containere bg-dark text-light py-3">
        <div class="container-md bg-dark">
            <div class="row text-center text-md-start ">
                <div class="col-md-1"></div>
                <div class="col-md-3 footer-section">
                    <div class="footer-logo">Logo</div>
                    <p>Công ty cổ phần .........</p>
                    <p>&copy;Copyright 2022 gia su. All Rights Reserved</p>
                </div>
                <div class="col-md-3 footer-section">
                    <h5>Số điện thoại</h5>
                    <p>xxxxxxxxxxxxxxx</p>
                    <h5>Email</h5>
                    <p>xxxxxxxxxxxxxxx</p>
                    <h5>Địa chỉ</h5>
                    <p>xxxxxxxxxxxxxxx</p>
                </div>
                <div class="col-md-2 footer-section">
                    <h5>THÔNG TIN</h5>
                    <div class="footer-links">
                        <a href="#">Điều khoản sử dụng</a>
                        <a href="#">Quyền riêng tư</a>
                    </div>
                </div>
                <div class="col-md-3 footer-section">
                    <h5>Chấp nhận thanh toán</h5>
                    <div class="footer-icons">
                        <a href="#"><img
                                src="https://upload.wikimedia.org/wikipedia/commons/c/c0/Asia_Commercial_Bank_logo.png"
                                alt="ACB"></a>
                        <a href="#"><img src="https://upload.wikimedia.org/wikipedia/vi/9/9a/Bidvlogo.png"
                                alt="BIDV"></a>
                    </div>
                    <h5>Kết nối với chúng tôi</h5>
                    <div class="footer-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>



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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/app.js" defer></script>
    </footer>
</body>

</html>