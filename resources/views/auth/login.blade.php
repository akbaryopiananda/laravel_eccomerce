@extends('layouts.app')
@section('content')

    @if(session('message'))
        <div class="alert success">
            {{ session('message') }}
        </div>
    @endif


    <div class="login__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="col-8 m-auto">
                        <img src="{{asset('img/product/Frame 70.png')}}" alt="" class="login__image mb-4">
                        <p class="login__subtitle">Use Revivla to found your best fashion only
                            for you. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-8 col-12">

                            <form method="POST" action="{{ route('login') }}" class="form__login">
                                @csrf
                                <h1 class="login__title mb-5">Sign In</h1>
                                <div class="d-flex flex-column mb-3">
                                    <label for="" class="label__login mb-2">Username</label>
                                    <input placeholder="Input Your Username" type="email" name="email" class="input__custom {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" autofocus required>
                                    @if($errors->has('email'))
                                        <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <div class="d-flex flex-column mb-5">
                                    <label for="" class="label__login mb-2">Password</label>
                                    <input placeholder="Input Your Password" type="password" name="password" class="input__custom {{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                    @if($errors->has('password'))
                                        <p class="invalid-feedback">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <button type="submit" class="btn__login-primary mb-4">
                                    {{ trans('global.login') }}
                                </button>
                                <p>Dont Have an Account?, You can Sign Up in <br> <a href="/register">here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection