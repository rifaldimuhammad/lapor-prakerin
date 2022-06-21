@extends('index')
{{-- <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/style.css" /> --}}
@section('content')
    <div class="login">
        <div class="login-img">
            <img src={{ asset('./img/login-img.svg') }} />
        </div>
        <div class="login-box">
            <div class="login-box__content">
                <div class="login-box__content-create">
                    <p>Not registered?<a href="/signup"> Create an account</a></p>
                </div>
                <div class="login-box__content-title">
                    <p class="login-box__content-title--welcome">Welcome back! 👋</p>
                    <p class="login-box__content-title--login">Login to your account</p>
                </div>




                <form action="/loginAuth" method="POST" class="login-box__content-form">
                    @csrf
                    @if (session()->has('succes'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> {{ session('succes') }} </strong> Please Login
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong> {{ session('loginError') }} </strong>please check your email or password
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="login-box__content-form--email">
                        <p class="login-box__content-form--email-text">School Email</p>
                        <input type="email" name="email" value="{{ old('email') }}"
                            placeholder="youremail@smkn1purwosari.sch.id" autofocus required
                            class="login-box__content-form--email-input" id="email" />
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="login-box__content-form--pasword">
                        <p class="login-box__content-form--pasword-text">Password</p>
                        <input type="password" name="password" placeholder="Enter password" required
                            class="login-box__content-form--pasword-input" id="password" />
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="login-box__content-form--submit">
                        <input type="submit" name="submit" placeholder="Login" id="submit" />
                    </div>
                    <p class="login-box__content-form--forgot">Forget Password?</p>
                </form>
                <div class="login-box__content-or">
                    <div></div>
                    <p>Or</p>
                </div>
                <div class="login-box__content-media">
                    <p class="login-box__content-media--title">Login using</p>
                    <div class="login-box__content-media--box">
                        <div class="login-box__content-media--box__icon-google"><img src={{ asset('./icons/gmail.svg') }}>
                        </div>
                        <div class="login-box__content-media--box__icon-ms"><img src={{ asset('./icons/Microsoft.svg') }}>
                        </div>
                        <div class="login-box__content-media--box__icon-apple"><img src={{ asset('./icons/Apple.svg') }}>
                        </div>
                        <div class="login-box__content-media--box__icon-fb"><img src={{ asset('./icons/Facebook.svg') }}>
                        </div>
                        <div class="login-box__content-media--box__icon-yahoo"><img src={{ asset('./icons/Yahoo.svg') }}>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
