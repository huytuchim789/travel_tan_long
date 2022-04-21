@extends('user.layouts.app')

@section('head')
    
@endsection

@section('main-content')
<div class="container">
    <div class="login-fullpage">                                                                            
        <div class="row">
            <div class="login-logo"><img class="center-image" src="{{ asset('user/img/special/login.jpg') }}" alt=""></div>
            <div class="col-xs-12 col-sm-7">
                <div class="f-login-content">
                    <div class="f-login-header">
                        <div class="f-login-title color-dr-blue-2">Đăng kí ở đây !</div>
                    </div>
                    <div class="card-body mt-5">
                        <form method="POST" action="{{ route('register') }}" class="f-login-form">
                            @csrf
                            <div class="input-style-1 b-50 type-2 color-5">
                                <input id="name" placeholder="Tên" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-style-1 b-50 type-2 color-5">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-style-1 b-50 type-2 color-5">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-style-1 b-50 type-2 color-5">
                                <input placeholder="Nhập lại password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="login-btn c-button full b-60 bg-dr-blue-2 hv-dr-blue-2-o">
                                {{ __('Đăng kí') }}
                            </button>
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Đăng nhập') }}
                            </a>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="full-copy">© 2022 All rights reserved. let’stravel</div>
</div>     
@endsection

@section('footer')
    
@endsection



