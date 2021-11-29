@extends('layouts.app')
@section('content')

<div class="login__section section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-block d-none">
                <div class="col-8 m-auto">
                    <img src="{{asset('/img/product/Frame 54.png')}}" alt="" class="login__image mb-4">
                    <p class="login__subtitle">Use Revivla to found your best fashion only
                        for you. </p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-8 col-12">

                        <form method="POST" class="form__login" action="{{ route('register') }}">
                            @csrf
                            <h1 class="login__title mb-5">Sign Up</h1>
                            <label for="name" class="d-flex flex-column mb-3 text-md-right">
                                <span class="text-gray-700 text-sm">{{ __('Name') }}</span>
                                <input placeholder="Masukkan Nama Lengkap" id="name" type="text" class="input__custom @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </label>

                            <label class="d-flex flex-column mb-3 text-md-right">
                                <span class="text-gray-700 text-sm">{{ __('E-Mail Address') }}</span>
                                <input placeholder="Masukkan Email" id="email" type="email" name="email" value="{{ old('email') }}" class="input__custom @error('email') is-invalid @enderror" required autocomplete="email">
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                 @enderror
                            </label>

                            <label class="d-flex flex-column mb-3 text-md-right" for="password"> 
                                <span class="text-gray-700 text-sm">{{ __('Password') }}</span>
                                <input placeholder="Masukkan Password" id="password" type="password" name="password" class="input__custom @error('password') is-invalid @enderror" required autocomplete="new-password">
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </label>

                            <label class="d-flex flex-column mb-3 text-md-right">
                                <span class="text-gray-700 text-sm">{{ __('Confirm Password') }}</span>
                                <input placeholder="Konfirmasi Password" id="password-confirm" type="password" name="password_confirmation" class="input__custom{{ $errors->has('password') ? ' is-invalid' : '' }}" required autocomplete="new-password">
                            </label>
                            <div class="mt-6">
                                <button type="submit" class="btn__login-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <div class="flex justify-between items-center mt-4">
                                <a class="link" href="{{ route('login') }}">{{ trans('Sudah Punya Akun ?') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
