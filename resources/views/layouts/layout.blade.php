<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>TopBlog</title>
    <link
        rel="stylesheet"
        href="{{'assets/vendors/mdi/css/materialdesignicons.min.css'}}"
    />
    <link rel="stylesheet" href="{{'assets.//vendors/aos/dist/aos.css/aos.css'}}"/>
    <link
        rel="stylesheet"
        href="{{'assets/vendors/owl.carousel/dist/'}}{{'assets/owl.carousel.min.css'}}"
    />
    <link
        rel="stylesheet"
        href="{{'assets/vendors/owl.carousel/dist/'}}{{'assets/owl.theme.default.min.css'}}"
    />
    <link rel="shortcut icon" href="{{'assets/images/favicon.png'}}"/>
    <link rel="stylesheet" href="{{'assets/css/style.css'}}">
</head>
<body>
<header id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                    <li>{{$today_day}}</li>
                </ul>
                <div>
                    <a class="navbar-brand" href="#"> TopBlog</a>
                </div>
                <div>
                    @guest()
                        <ul>
                            <a class="btn btn-link" href="{{route('login')}}" style="text-decoration:none">Увійти!</a>
                        </ul>
                    @endguest
                    @auth()
                        <ul>
                            <a class="btn btn-link" href="{{route('login')}}" style="text-decoration:none">Особистий
                                кабінет</a>
                        </ul>
                    @endauth

                </div>
                <div class="d-flex">
                    <ul class="social-media">
                        <li>
                            <a href="#">
                                <i class="mdi mdi-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-bottom-menu">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div
                    class="navbar-collapse justify-content-center collapse"
                    id="navbarSupportedContent"
                >
                    <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                    >
                        <li>
                            <button class="navbar-close">
                                <i class="mdi mdi-close"></i>
                            </button>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active"
                               href="{{route('main.category_php')}}">PHP</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active"
                               href="{{route('main.category_cpp')}}">C++</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
@yield('content')
</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="border-top"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div
                        class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                    >
                        <ul class="footer-horizontal-menu">
                            <li><a href="#">Terms of Use.</a></li>
                            <li><a href="#">Privacy Policy.</a></li>
                            <li><a href="#">Accessibility & CC.</a></li>
                            <li><a href="#">AdChoices.</a></li>
                            <li><a href="#">Advertise with us Transcripts.</a></li>
                            <li><a href="#">License.</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                        <p class="font-weight-medium">
                            © 2022 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">@
                                BootstrapDash</a>, Inc.All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</footer>
</html>
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>
