<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/53fe2192d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter|Days+One">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    @yield('style')
    <title>@yield('title') | Course Desk</title>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent mb-5">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/brand_logo.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link nav-text-inter" href="/online-degrees">Online Degrees</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link nav-text-inter" href="/careers">Find your New Career</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link nav-text-inter" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link nav-text-inter" href="/contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-text-inter" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-text-inter btn btn-outline-dark" href="/signup">Sign Up</a>
                    </li>
                    {{-- Avatar if auth --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false" >
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Portrait of a Woman" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
        {{-- <div class="d-flex position-absolute justify-content-between align-items-center">

        </div> --}}
    {{-- End Navbar --}}

    {{-- Content --}}
    <div class="body-content">
        @yield('content')
    </div>
    {{-- End Content --}}

    {{-- Footer --}}
    <footer class="py-5"style="background-color: #FFF7E0;">
        <div class="container d-flex flex-column flex-xl-row justify-content-evenly">
            <div class="app_desc d-flex flex-column w-25">
                <img src="{{asset('img/brand_logo.png')}}" class="mb-5 w-50" alt="">
                <p class="text-wrap text-inter text-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco..
                </p>
            </div>
            <div class="link1 d-flex flex-column">
                <h5 class="text-days mb-5">Quick links</h5>
                <div class="list-group links d-flex flex-column">
                    <a href="#" class="text-inter my-1">Online Degree</a>
                    <a href="#" class="text-inter my-1">Find your New Career</a>
                    <a href="#" class="text-inter my-1">Blog</a>
                    <a href="#" class="text-inter my-1">Courses</a>
                </div>
            </div>
            <div class="link2 d-flex flex-column">
                <h5 class="text-days mb-5">Quick links</h5>
                <div class="links d-flex flex-column">
                    <a href="#" class="text-inter my-1">Online Degree</a>
                    <a href="#" class="text-inter my-1">Find your New Career</a>
                    <a href="#" class="text-inter my-1">Blog</a>
                    <a href="#" class="text-inter my-1">Courses</a>
                </div>
            </div>
            <div class="download_app">
                <h5 class="text-days mb-5">Download App</h5>
                <button class="btn btn-outline-dark shadow-box px-4 py-2">
                    <img src="{{asset('img/button_play_store.png')}}" alt="">
                </button>
            </div>
        </div>
    </footer>
    <div class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="copyrights">
                &copy 2023 | Triptych Code. All rights reserved.
            </div>
            <div class="social_media">
                <a href="#"><i class="fa-brands fa-instagram mx-1" style="color: #334456;"></i></a>
                <a href="#"><i class="fa-brands fa-facebook mx-1" style="color: #334456;"></i></a>
                <a href="#"><i class="fa-brands fa-twitter mx-1" style="color: #334456;"></i></a>
            </div>
        </div>
    </div>
    {{-- End Footer --}}
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
