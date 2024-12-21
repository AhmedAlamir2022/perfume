@extends('frontend.body.master')
@section('title')
     Register
@stop
    @section('main')

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Authentication</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Authentication</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <div class="row">

                    <!--Form Sign In-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="signin-container">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <p class="form-row">
                                    <label for="name">Name:<span class="requite">*</span></label>
                                    <input type="text" id="name" name="name" class="txt-input @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
									@error('name')
                                    	<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                	@enderror
                                </p>
                                <p class="form-row">
                                    <label for="email">Email Address:<span class="requite">*</span></label>
                                    <input type="email" id="email" name="email" class="txt-input @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus required>
									@error('email')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </p>
                                <p class="form-row">
                                    <label for="password">Password:<span class="requite">*</span></label>
                                    <input type="password" id="password" name="password" class="txt-input @error('password') is-invalid @enderror" required autocomplete="password">
									@error('password')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
									@enderror
                                </p>
                                <p class="form-row">
                                    <label for="password_confirmation">Confirm Password:<span class="requite">*</span></label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="txt-input" equired autocomplete="new-password">
                                </p>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">sign up</button>
                                </p>
                            </form>
                        </div>
                    </div>

                    <!--Go to Register form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="register-in-container">
                            <div class="intro">
                                <h4 class="box-title">Have an account?</h4>
                                <p class="sub-title">Login to your account and you’ll be able to:</p>
                                <ul class="lis">
                                    <li>Check out faster</li>
                                    <li>Save multiple shipping anddesses</li>
                                    <li>Access your order history</li>
                                    <li>Track new orders</li>
                                    <li>Save items to your Wishlist</li>
                                </ul>
                                <a href="{{ route('login') }}" class="btn btn-bold">Login</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    @endsection
