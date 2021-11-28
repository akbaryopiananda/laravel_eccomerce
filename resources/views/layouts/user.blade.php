<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('/img/logo/Revivla.co.svg')}}" type = "image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styleguide.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Revivla.co E-commerce</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg__white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ URL::asset('/img/logo/Revivla.co.svg')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text__center" id="navbarText">
                    <ul class="navbar-nav ms-auto me-3 mb-1 mb-lg-0">
                        <li class="nav-item me-4">
                            <div class="nav__active d-none d-lg-block">
                                <a class="nav-link mb-1 mb-lg-0 " aria-current="page" href="/">Beranda</a>
                            </div>
                            <div class="d-block d-lg-none">
                                <a class="nav-link mb-1 mb-lg-0 " aria-current="page" href="/">Beranda</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category">Kategori</a>
                        </li>
                    </ul>
                    <span class="navbar__button ms-0 ms-lg-2 d-flex d-lg-block flex-column">
                        <a href="cart" class="btn__icon me-2 mb-2"><span class="me-2">Cart</span>
                            <img src="{{ URL::asset('/img/logo/Buy.svg')}}" alt="">
                        </a>
                        <a href="/register" class="btn__secondary me-2 mb-2">Sign Up</a>
                        <a href="/login" class="btn__primary">Sign In</a>
                    </span>
                </div>
            </div>
        </nav>
    </header>
        @yield("content")
        <footer>
            <div class="footer__section">
                <div class="container">
                    <div class="row center__footer">
                        <div class="col-lg-3 mb-lg-0 mb-4">
                            <a href="#">
                                <img src="{{ URL::asset('/img/logo/logo.svg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 mb-lg-0 mb-4">
                            <div class="footer_menu">
                                <h1 class="menu__name">Menu</h1>
                            </div>
                            <div class="menu__links">
                                <a href="#" class="menu__link mb-3">Home</a>
                                <a href="#" class="menu__link">Categories</a>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="footer_menu">
                                <h1 class="menu__name">Trending</h1>
                            </div>
                            <div class="menu__links">
                                <a href="#" class="menu__link mb-lg-3">
                                    <img src="{{ URL::asset('/img/product/product-1.png')}}" alt="" class="footer__product me-3">
                                    <span>Polkadot Dress</span>
                                </a>
                                <a href="#" class="menu__link mb-lg-3">
                                    <img src="{{ URL::asset('/img/product/product-2.png')}}" alt="" class="footer__product me-3">
                                    <span>Polkadot Dress</span>
                                </a>
                                <a href="#" class="menu__link mb-lg-3">
                                    <img src="{{ URL::asset('/img/product/product-3.png')}}" alt="" class="footer__product me-3">
                                    <span>Polkadot Dress</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer_menu">
                                <h1 class="menu__name">Get In Touch</h1>
                            </div>
                            <div class="menu__links mb-5">
                                <p class="menu__detail">
                                    You’ll find your next home, in any style you prefer.
                                </p>
                            </div>
                            <div class="menu-sosmed">
                                <a href="#">
                                    <img src="{{ URL::asset('/img/logo/Facebook icon.svg')}}" class="me-3" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ URL::asset('/img/logo/twitter icon.svg')}}" class="me-3" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ URL::asset('/img/logo/lindedin icon.svg')}}" class="me-2" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ URL::asset('/js/cutom.js')}}"></script>
    <script src="{{ URL::asset('/js/swipe.js')}}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>