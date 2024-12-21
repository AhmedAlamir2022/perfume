@extends('frontend.body.master')
@section('title')
    Payment Methods
@stop
@section('main')

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Payment Methods</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Payment Methods</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!-- Main content -->
            <div id="main-content" class="main-content">

                <div class="tab-content">
                    <div class="tab-contain shipping-delivery-tab">
                        <div class="accodition-tab biolife-accodition">
                            <ul class="tabs">
                                <li class="tab-item">
                                    <span class="title btn-expand">Credit/Debit Cards</span>
                                    <div class="content">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="signin-container">
                                                <form>
                                                    @csrf
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <p class="form-row">
                                                            <label">Card Holder Name:<span class="requite">*</span></label>
                                                            <input type="text" placeholder="John Doe">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <p class="form-row">
                                                            <label">Passport:<span class="requite">*</span></label>
                                                            <input type="number" placeholder="123456789">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <p class="form-row">
                                                            <label">Card Number:<span class="requite">*</span></label>
                                                            <input type="number" placeholder="1234 5678 9123 4567">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <p class="form-row">
                                                            <label">Expire Date:<span class="requite">*</span></label>
                                                            <input type="date" placeholder="mm/yy">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <p class="form-row">
                                                            <label">Security Code:<span class="requite">*</span></label>
                                                            <input type="text" placeholder="123">
                                                        </p>
                                                    </div>
                                                    <p class="form-row wrap-btn">
                                                        <button class="btn btn-submit btn-bold">Pay</button>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="tab-item">
                                    <span class="title btn-expand">KNET</span>
                                    <div class="content">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="signin-container">
                                                <form>
                                                    @csrf
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <p class="form-row">
                                                            <label">Bank:<span class="requite">*</span></label>
                                                            <input type="text" placeholder="National Bank of Kuwait">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <p class="form-row">
                                                            <label">Card Number:<span class="requite">*</span></label>
                                                            <input type="number" placeholder="1234 5678 9123 4567">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <p class="form-row">
                                                            <label">Expire Date:<span class="requite">*</span></label>
                                                            <input type="date" placeholder="mm/yy">
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <p class="form-row">
                                                            <label">PIN:<span class="requite">*</span></label>
                                                            <input type="text" placeholder="123">
                                                        </p>
                                                    </div>
                                                    <p class="form-row wrap-btn">
                                                        <button class="btn btn-submit btn-bold">Pay</button>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="tab-item">
                                    <span class="title btn-expand">PayPal</span>
                                    <div class="content">
                                        <p>As a member, your eligable purchase are coverd by PayPal Purchase Protection.</p>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="signin-container">
                                                    <form>
                                                        @csrf
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <p class="form-row">
                                                                <label">Email:<span class="requite">*</span></label>
                                                                <input type="text" placeholder="johndoe@gmail.com">
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <p class="form-row">
                                                                <label">Password:<span class="requite">*</span></label>
                                                                <input type="number" placeholder="**************">
                                                            </p>
                                                        </div>
                                                        <p class="form-row wrap-btn">
                                                            <button class="btn btn-submit btn-bold">Pay</button>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                    </div>
                                </li>
                                <li class="tab-item">
                                    <span class="title btn-expand">Cash On Delivery</span>
                                    <div class="content">
                                        <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver
                                            to all 50 states plus Puerto Rico. Certain items may be excluded for
                                            delivery to Puerto Rico. This will be indicated on the product page.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
