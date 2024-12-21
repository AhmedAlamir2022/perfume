@extends('frontend.body.master')
@section('title')
    Product Details
@stop
@section('main')

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Product Details</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="{{ url('/') }}" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Product Details</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!-- Main content -->
            <div id="main-content" class="main-content">

                <!-- summary info -->
                <div class="sumary-product single-layout">
                    <div class="media">
                        <ul class="biolife-carousel slider-for"
                            data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                            <li><img src="{{ asset($products->image1) }}" alt="" width="500" height="500"></li>
                            <li><img src="{{ asset($products->image2) }}" alt="" width="500" height="500"></li>
                            <li><img src="{{ asset($products->image3) }}" alt="" width="500" height="500"></li>
                            <li><img src="{{ asset($products->image4) }}" alt="" width="500" height="500"></li>
                            <li><img src="{{ asset($products->image5) }}" alt="" width="500" height="500"></li>
                        </ul>
                        <ul class="biolife-carousel slider-nav"
                            data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
                            <li><img src="{{ asset($products->image1) }}" alt="" width="88" height="88"></li>
                            <li><img src="{{ asset($products->image2) }}" alt="" width="88" height="88"></li>
                            <li><img src="{{ asset($products->image3) }}" alt="" width="88" height="88"></li>
                            <li><img src="{{ asset($products->image4) }}" alt="" width="88" height="88"></li>
                            <li><img src="{{ asset($products->image5) }}" alt="" width="88" height="88">
                            </li>
                        </ul>
                    </div>
                    <div class="product-attribute">
                        <h3 class="title">{{ $products->name }}</h3>
                        <div class="rating">
                            <p class="star-rating"><span class="width-80percent"></span></p>
                            <span class="review-count">(04 Reviews)</span>
                            <b class="category">{{ $products->brands->name }}</b>
                        </div>
                        <span class="sku">SKU: {{ $products->code }}</span><br>
                        <span class="sku">Size: {{ $products->size }} ml</span>
                        <p class="excerpt">{{ $products->short_desc }}.</p>
                        <div class="price">
                            <ins><span class="price-amount"><span class="currencySymbol"></span>{{ $products->new_price }}
                                    (KWD)</span></ins>
                        </div>
                        <div class="shipping-info">
                            <p class="shipping-day">3-Day Shipping</p>
                            <p class="for-today">Pree Pickup Today</p>
                        </div>
                    </div>
                    <div class="action-form">
                        <div class="quantity-box">
                            <span class="title">{{ $products->name }}</span><br>
                            <span class="title"></span></span>{{ $products->new_price }} (KWD)</span><br>
                        </div>
                        <div class="buttons">
                            <form method="post" action= "{{ route('make.order') }}">
                                @csrf
                                <p class="form-row">
                                    <input type="hidden" name="id" value="{{ $products->id }}">
                                </p>
                                <p class="form-row">
                                    <input type="hidden" name="quantity" value="{{ $products->quantity }}">
                                </p>
                                <p class="form-row">
                                    <input type="hidden" name="product_price" value="{{ $products->new_price }}">
                                </p>
                                <p class="form-row">
                                    <input type="number" name="my_quantity" required placeholder="Quantity">
                                </p><br>
                                <p class="form-row">
                                    <button class="btn add-to-cart-btn" type="submit">Order Now</button>
                                </p>
                            </form>
                        </div>

                        <div class="social-media">
                            <ul class="social-list">
                                <li><a class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                <li><a class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src="{{ asset('frontend/images/card1.jpg') }}" alt="" width="51"
                                        height="36"></li>
                                <li><img src="{{ asset('frontend/images/card2.jpg') }}" alt="" width="51"
                                        height="36"></li>
                                <li><img src="{{ asset('frontend/images/card3.jpg') }}" alt="" width="51"
                                        height="36"></li>
                                <li><img src="{{ asset('frontend/images/card4.jpg') }}" alt="" width="51"
                                        height="36"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tab info -->
                <div class="product-tabs single-layout biolife-tab-contain">
                    <div class="tab-head">
                        <ul class="tabs">
                            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products Descriptions</a>
                            </li>
                            <li class="tab-element"><a href="#tab_2nd" class="tab-link">Addtional information</a></li>
                            <li class="tab-element"><a href="#tab_3rd" class="tab-link">Ingredients</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab_1st" class="tab-contain desc-tab active">
                            <p class="desc">{{ $products->long_desc }}</p>
                        </div>
                        <div id="tab_2nd" class="tab-contain addtional-info-tab">
                            <table class="tbl_attributes">
                                <tbody>
                                    <tr>
                                        <th>Quantity</th>
                                        <td>
                                            <p>{{ $products->quantity }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>New Price</th>
                                        <td>
                                            <p>{{ $products->new_price }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Old Price</th>
                                        <td>
                                            <p>{{ $products->old_price }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab_3rd" class="tab-contain shipping-delivery-tab">
                            <table class="tbl_attributes">
                                <thead>
                                    <tr>
                                        <th style="font-weight: bold;"> Name</th>
                                        <th style="font-weight: bold;"> Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($components as $component)
                                        @if ($component->product_id == $products->id)
                                            <tr>
                                                <td><p>{{ $component->name }}</p></td>
                                                <td><p>{{ $component->description }}</p></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- related products -->
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile"
                        data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                        @php
                            $products = App\Models\Product::latest()->get();
                        @endphp
                        @foreach ($products as $product)
                            <li class="product-item">
                                <div class="contain-product layout-default">
                                    <div class="product-thumb">
                                        <a href="{{ route('product.details', $product->id) }}" class="link-to-product">
                                            <img src="{{ asset($product->image1) }}" alt="dd" width="270"
                                                height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">{{ $product->categories->title }}</b>
                                        <h4 class="product-title"><a href="{{ route('product.details', $product->id) }}"
                                                class="pr-name">{{ $product->name }}</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span
                                                        class="currencySymbol">£</span>{{ $product->new_price }}</span></ins>
                                            <del><span class="price-amount"><span
                                                        class="currencySymbol">£</span>{{ $product->old_price }}</span></del>
                                        </div>
                                        <div class="shipping-info">
                                            <p class="shipping-day">3-Day Shipping</p>
                                            <p class="for-today">Pree Pickup Today</p>
                                        </div>
                                        <div class="slide-down-box">
                                            <div class="buttons">
                                                <a href="" class="btn wishlist-btn"><i class="fa fa-heart"
                                                        aria-hidden="true"></i></a>
                                                <a href="{{ route('product.details', $product->id) }}"
                                                    class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down"
                                                        aria-hidden="true"></i>View Details</a>
                                                <a href="" class="btn compare-btn"><i class="fa fa-random"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

@endsection
