@extends('frontend.body.master')
@section('title')
     About Us
@stop
    @section('main')
    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">About Us</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">About us</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain about-us">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <div class="welcome-us-block">
                <div class="container">
                    <h4 class="title">Welcome to Our Store!</h4>
                    <div class="text-wraper">
                        <p class="text-info">Traditionally, the most prominent place to buy perfume was in a department store or a specialty store. In the past decade, there has been a sizable shift in retail from people shopping in stores to making purchases online, which includes cosmetics and perfume. Learn how to market perfume online to build your brand and entice online shoppers to buy your fragrance.
                            Statista reported that the beauty industry generated 49.2 billion dollars in the United States in 2020. People still like to look and smell good on a daily basis. Knowing how to market your perfume online increases your chances of successfully reaching shoppers and convincing them to try your product.
                            </p>

                    </div>
                </div>
            </div>

            <div class="testimonial-block">
                <div class="container">
                    <h4 class="box-title">Testimonials</h4>
                    <ul class="testimonial-list biolife-carousel" data-slick='{"arrows":false,"dots":true,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        @php
							$testimonials = App\Models\Testimonial::latest()->get();
						@endphp
						@foreach($testimonials as $item)
                            @if($item->status == '1')
                                <li>
                                    <div class="testml-elem">
                                        <div class="avata">
                                            <figure><img src="{{ URL::asset('uploads/img_avatar3.png') }}" alt="" width="217" height="217"></figure>
                                        </div>
                                        <p class="desc">{{ $item->testimonial }}</p>
                                        <b class="name">{{ $item->name }}</b>
                                        <b class="title">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</b>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="container">

                <div class="row">

                    <!--Contact info-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                            <h4 class="box-title">Our Contact</h4>
                            @php
								$quires = App\Models\Query::latest()->limit(1)->get();
							@endphp
							@foreach($quires as $item)
                            <p class="frst-desc">{{ $item->details }}</p>
                            <ul class="addr-info">
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Addess:</b>
                                        <p class="dsc">{{ $item->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Phone:</b>
                                        <p class="dsc">(+) {{ $item->phone }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Email:</b>
                                        <p class="dsc">{{ $item->email }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Store Open:</b>
                                        <p class="dsc">All Days All Time</p>
                                    </div>
                                </li>
                            </ul>
                            @endforeach
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!--Contact form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-container sm-margin-top-112px">
                            <form method="post" action= "{{ route('store.message') }}" >
                                {{ csrf_field() }}
                                <p class="form-row">
                                    <input type="text" name="name" placeholder="Your Name" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <input type="email" name="email" placeholder="Email Address" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <input type="tel" name="phone" placeholder="Phone Number" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <input type="text" name="subject" placeholder="Subject" class="txt-input" required>
                                </p>
                                <p class="form-row">
                                    <textarea name="message" id="mes-1" cols="30" rows="9" placeholder="Leave Message"></textarea>
                                </p>
                                <p class="form-row">
                                    <button class="btn btn-submit" type="submit">send message</button>
                                </p>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>
    <!-- Block 11: Newsletter-->
    <div class="newsletter-block layout-03 sm-margin-top-39px xs-margin-top-90px">
        <div class="container">
            <div class="form-content">
                <h3 class="newslt-title">Subscribe for our newsletter</h3>
                <p class="sub-title">and enjoy <b>25%</b> off your first purchase!</p>
                <form method="post" action= "{{ route('store.sub') }}">
                    {{ csrf_field() }}
                    <input type="email" name="email" class="input-text email" placeholder="Your email here..."
                        required>
                    <button type="submit" class="bnt-submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>


    @endsection
