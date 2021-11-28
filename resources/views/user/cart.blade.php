@extends('layouts.user')
@section('content')
    <div class="sitemap__section">
        <div class="container">
            <a class="sitemap__name">Home</a> <span class="text-white">/</span> <span class="text-white"><strong> Cart
                </strong></span>
        </div>
    </div>

    <div class="cart__section mb-5">
        <div class="col-lg-12">
            <div class="container">
                <div class="cart__bag mb-4">
                    <h1 class="form__title mb-5">Cart Details</h1>

                    <div class="item card_ mb-4 align-items-center">
                        <div class="col-lg-3 col-12">
                            <div class="image">
                                <img src="{{ asset('/img/product/product-2.png')}}" class="image__product" alt="" />
                            </div>
                        </div>

                        <div class="col-lg-3 col-12">
                            <div class="description">
                                <h1 class="cart__categories mb-lg-4">Woman</h1>
                                <h1 class="cart__name">Polkadot Dress</h1>
                            </div>
                        </div>

                        <div class="col-lg-2 col-12">
                            <div class="quantity mb-lg-0 mb-3">
                                <button class="plus-btn cart__quantity" type="button" name="button">
                                    <img src="{{ asset('/img/logo/plus.svg')}}" alt="" />
                                </button>
                                <input type="text" name="name" value="1">
                                <button class="minus-btn cart__quantity" type="button" name="button">
                                    <img src="{{ asset('/img/logo/minus.svg')}}" alt="" />
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-2 col-12">
                            <div class="total__price">
                                <p class="login__subtitle mb-4 d-lg-block d-none">Price</p>
                                <h1 class="total__price">
                                    300k
                                </h1>
                            </div>
                        </div>

                        <div class="col-lg-2 col-12">
                            <div class="button__action">
                                <form action="" method="post">
                                    <button class="btn__secondary">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="item card_  mb-4 align-items-center">
                        <div class="col-lg-3 col-12">
                            <div class="image">
                                <img src="{{ asset('/img/product/product-1.png')}}" class="image__product" alt="" />
                            </div>
                        </div>

                        <div class="col-lg-3 col-12">
                            <div class="description">
                                <h1 class="cart__categories mb-lg-4">Woman</h1>
                                <h1 class="cart__name">Polkadot Dress</h1>
                            </div>
                        </div>

                        <div class="col-lg-2 col-12">
                            <div class="quantity mb-lg-0 mb-3">
                                <button class="plus-btn cart__quantity" type="button" name="button">
                                    <img src="{{ asset('/img/logo/plus.svg')}}" alt="" />
                                </button>
                                <input type="text" name="name" value="1">
                                <button class="minus-btn cart__quantity" type="button" name="button">
                                    <img src="{{ asset('/img/logo/minus.svg')}}" alt="" />
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-2 col-12">
                            <div class="total__price">
                                <p class="login__subtitle mb-4 d-lg-block d-none">Price</p>
                                <h1 class="total__price">
                                    300k
                                </h1>
                            </div>
                        </div>

                        <div class="col-lg-2 col-12">
                            <div class="button__action">
                                <form action="" method="post">
                                    <button class="btn__secondary">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

    

    <div class="form__cart mt-5 section">
        <div class="container">
            <div class="row">
                <h1 class="form__title mb-">Shipping Details</h1>
                <div class="d-lg-flex d-block mt-5">
                    <div class="col-lg-3 col-12 me-5">
                        <div class="d-flex flex-column mb-3">
                            <label for="" class="label__login mb-2">Name</label>
                            <input placeholder="Input Your Username" name="username" type="text" class="input__custom">
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <label for="" class="label__login mb-2">Phone Number</label>
                            <input placeholder="Input Your Username" name="username" type="text" class="input__custom">
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <label for="" class="label__login mb-2">Address</label>
                            <textarea name="" placeholder="Input Your Address" id="" cols="30" rows="10"
                                class="input__custom"></textarea>
                        </div>
                    </div>



                    <div class="col-lg-3 col-12 me-5">
                        <div class=" d-flex flex-column mb-3">
                            <label for="" class="label__login mb-2">Payment</label>
                            <select name="" id="" class="input__custom bg-white">
                                <option value="">BCA</option>
                                <option value="">Mandiri</option>
                            </select>


                            <div class="img__payments d-flex">
                                <img src="{{ asset('/img/BCA.png')}}" alt="" class="img__payment me-2">
                                <img src="{{ asset('/img/Mandiri.png')}} " alt="" class="img__payment">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-1 col-12">

                    </div>

                    <div class="col-lg-2 col-12 mb-lg-0 mb-4">
                        <div class="total__price d-flex d-lg-block justify-content-between mt-lg-0 mt-5">
                            <h1 class="form__title mb-2">Total</h1>
                            <h1 class="form__totaL">900k</h1>
                        </div>
                    </div>

                    <div class="col-lg-2 col-12">
                        <div class="button__action d-block">
                            <form action="" method="post">
                                <button class="btn__primary">Checkout</button>
                            </form>
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