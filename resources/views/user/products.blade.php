@extends('layouts.user')
@section('content')
    <div class="sitemap__section">
        <div class="container">
            <a class="sitemap__name">Home</a> <span class="text-white">/</span> <span class="text-white"><strong> Products </strong></span>
        </div>
    </div>

    <div class="products__section section">
        <div class="container">
            <div class="row">
                <div id="" class="col-lg-2 col-12">
                    <div class="row swipe-wrap">
                        <div class="col-lg-12">
                            <ul class="categories__list">
                                <li class="mb-3 btn__primary">
                                    <a class="text-white p-auto" href="">All Product</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="">Women</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="">Men</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="">Trendy</a>
                                </li>
                                <li class="mb-3 btn__secondary ">
                                    <a class="list__name" href="">Unisex</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div id="products" class="col-lg-4 col-12  mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/product-2.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="col-lg-4 col-12 mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/product-3.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="col-lg-4 col-12 mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/Frame 70.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="col-lg-4 col-12 mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/Frame 54.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="col-lg-4 col-12 mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/product-1.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="col-lg-4 col-12 mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/product-1.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="col-lg-4 col-12 mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/product-1.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="col-lg-4 col-12 mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/product-1.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div id="products" class="col-lg-4 col-12 mb-3">
                            <div class="card__">
                                <div class="product__img">
                                    <a href="#">
                                        <img class="product__image-2" src="{{ asset('/img/product/product-1.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__detail">
                                    <a href="">
                                        <h1 id="products" class="product__name">Polkadot Dress</h1>
                                    </a>
                                    <p class="product__desc">Best seller dress for trendy fashion at this moment.</p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="btn__primary">
                                        <img src="{{ asset('/img/logo/Buy-White.svg')}}" alt="">
                                    </button>
                                    <h1 id="products" class="product__price">
                                        300K
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="pagination__categories d-flex flex-colum">
                                <li>
                                    <a href="#" class="pagination__list me-5 pagination__active">1</a>
                                </li>
                                <li>
                                    <a href="#" class="pagination__list me-5">2</a>
                                </li>
                                <li>
                                    <a href="#" class="pagination__list me-5">3</a>
                                </li>
                                <li>
                                    <a href="#" class="pagination__list">
                                        <img src="{{ asset('/img/logo/Arrow - Right2.svg')}}" alt="" srcset="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>


    @endsection
    @section('scripts')
    @parent
    
    @endsection