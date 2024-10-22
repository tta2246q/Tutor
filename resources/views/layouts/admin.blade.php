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
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
</head>

<body class="body">
    <header class="container-fluid body_header ">
        <div class="col-12 pt-4">
            <div class="row">
                <div class="col-3">
                    <img src="" alt="LOGO">
                </div>
                <div class="col-4">
                    <div class="container">
                        <div class="row height d-flex justify-content-start align-items-center">
                            <div class="col-md-8">
                                <div class="search">
                                    <i class="fa fa-search"></i>
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-end pe-5">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-bell me-3"></i>
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
            </div>
        </div>
    </header>

    <main>
        <div class="col-12">
            <div class="row">
                <div class="col-2">
                    <div class=" sidebar p-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="http://127.0.0.1:8000">Dashboard</a>
                            </li>
                            <li class="nav-item mt-3">
                                <a class="nav-link text-white" href="http://127.0.0.1:8000/Tutor_Manager">Tutor Manager</a>
                            </li>
                            <li class="nav-item mt-3">
                                <a class="nav-link text-white" href="http://127.0.0.1:8000/Manager_payment">Manage payments</a>
                            </li>
                            <li class="nav-item mt-3">
                                <a class="nav-link text-white" href="http://127.0.0.1:8000/inbox">inbox</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-10 container">
                    @yield('content')
                </div>
            </div>
        </div>

    </main>

    <footer class="">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/app.js" defer></script>
    </footer>
</body>

</html>