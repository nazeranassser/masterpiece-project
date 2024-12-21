
@include('theme.partials.header')

        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Primary Slider ======-->
            <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-1" id="hero-slider">
                    <div class="hero-slide hero-slide--1">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-secondary">Latest Update Stock</span>

                                        <span class="content-span-2 u-c-secondary">30% Off On Electronics</span>

                                        <span class="content-span-3 u-c-secondary">Find electronics on best prices, Also Discover most selling products of electronics</span>

                                        <span class="content-span-4 u-c-secondary">Starting At

                                            <span class="u-c-brand">$1050.00</span></span>

                                        <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-white">Find Top Brands</span>

                                        <span class="content-span-2 u-c-white">10% Off On Electronics</span>

                                        <span class="content-span-3 u-c-white">Find electronics on best prices, Also Discover most selling products of electronics</span>

                                        <span class="content-span-4 u-c-white">Starting At

                                            <span class="u-c-brand">$380.00</span></span>

                                        <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-secondary">Find Top Brands</span>

                                        <span class="content-span-2 u-c-secondary">10% Off On Electronics</span>

                                        <span class="content-span-3 u-c-secondary">Find electronics on best prices, Also Discover most selling products of electronics</span>

                                        <span class="content-span-4 u-c-secondary">Starting At

                                            <span class="u-c-brand">$550.00</span></span>

                                        <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Primary Slider ======-->

            


            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

            <!--====== NEW ARRIVALS ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">NEW ARRIVALS</h1>

                                    <span class="section__span u-c-silver">GET UP FOR NEW ARRIVALS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


  <!--====== Section Content ======-->
<div class="section__content">
    <div class="container">
        <div class="slider-fouc">
            <div class="owl-carousel product-slider" data-item="4">
                @foreach($newArrivals as $product)
                <div class="u-s-m-b-30">
                    <div class="product-o product-o--hover-on">
                        <div class="product-o__wrap">
                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
                                <img class="aspect__img" src="{{ asset('uploads/products/' . $product->image) }}" alt="{{ $product->name }}">
                            </a>
                            <div class="product-o__action-wrap">
                                <ul class="product-o__action-list">
                                    <li>
                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cart.add', $product->id) }}" title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                    </li>
                                    <li>
                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <span class="product-o__category">
                            <a href="shop-side-version-2.html">{{ $product->category->name }}</a>
                        </span>
                        <span class="product-o__name">
                            <a href="product-detail.html">{{ $product->name }}</a>
                        </span>
                        <div class="product-o__rating gl-rating-style">
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            <span class="product-o__review">(0)</span>
                            <span class="product-o__price">
                                ${{ number_format($product->price, 2) }}
                                @if($product->discount_price)
                                    <span class="product-o__discount">${{ number_format($product->discount_price, 2) }}</span>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>




            </div>
            <!--====== End - NEW ARRIVALS ======-->


                

           <!-- Our Products Section -->
<div class="u-s-p-b-60">
    <!-- Section Title -->
    <div class="section__intro u-s-m-b-16">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary u-s-m-b-12">OUR PRODUCTS</h1>
                        <span class="section__span u-c-silver">Choose a category</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Title -->

    <!-- Section Content -->
    
    <!-- Product Category Filters -->
    <div class="section__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-category-container">
                        @foreach($productsByType as $product)
                            <div class="filter__category-wrapper">
                                <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".{{$product->category->slug}}">
                                    {{ $product->category->name }}
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Display Products -->
    <div class="filter__grid-wrapper u-s-m-t-30">
        <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                    <div class="product-o product-o--hover-on product-o--radius">
                        <div class="product-o__wrap">
                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
                                <img class="aspect__img" src="{{ asset('assets/images/product/'.$product->image) }}" alt="{{ $product->name }}">
                            </a>
                            <div class="product-o__action-wrap">
                                <ul class="product-o__action-list">
                                    <li><a data-modal="modal" data-modal-id="#quick-look" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                    <li><a href="{{ route('cart.add', $product->id) }}" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                    <li><a href="signin.html" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="signin.html" title="Notify Me When Price Drops"><i class="fas fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="product-o__category">
                            <a href="shop-side-version-2.html">{{ $product->category->name }}</a>
                        </span>
                        <span class="product-o__name">
                            <a href="product-detail.html">{{ $product->name }}</a>
                        </span>
                        <div class="product-o__rating gl-rating-style">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="product-o__review">(23)</span>
                        </div>
                        <span class="product-o__price">${{ $product->price }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">DEAL OF THE DAY</h1>

                                    <span class="section__span u-c-silver">BUY DEAL OF THE DAY, HURRY UP! THESE NEW PRODUCTS WILL EXPIRE SOON.</span>

                                    <span class="section__span u-c-silver">ADD THESE ON YOUR CART.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 u-s-m-b-30">
                                <div class="product-o product-o--radius product-o--hover-off u-h-100">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                            <img class="aspect__img" src="{{asset('assets')}}/images/product/electronic/product11.jpg" alt=""></a>
                                        <div class="product-o__special-count-wrap">
                                            <div class="countdown countdown--style-special" data-countdown="2020/05/01"></div>
                                        </div>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">DJI Phantom Drone 4k</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(2)</span></div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 u-s-m-b-30">
                                <div class="product-o product-o--radius product-o--hover-off u-h-100">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                            <img class="aspect__img" src="{{asset('assets')}}/images/product/electronic/product12.jpg" alt=""></a>
                                        <div class="product-o__special-count-wrap">
                                            <div class="countdown countdown--style-special" data-countdown="2020/05/01"></div>
                                        </div>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                <li>

                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="product-o__name">

                                        <a href="product-detail.html">DJI Phantom Drone 2k</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                        <span class="product-o__review">(2)</span></div>

                                    <span class="product-o__price">$125.00

                                        <span class="product-o__discount">$160.00</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 3 ======-->


            

            <!--====== Section 5 ======-->
            <div class="banner-bg">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-bg__countdown">
                                    <div class="countdown countdown--style-banner" data-countdown="2020/05/01"></div>
                                </div>
                                <div class="banner-bg__wrap">
                                    <div class="banner-bg__text-1">

                                        <span class="u-c-white">Global</span>

                                        <span class="u-c-secondary">Offers</span></div>
                                    <div class="banner-bg__text-2">

                                        <span class="u-c-secondary">Official Launch</span>

                                        <span class="u-c-white">Don't Miss!</span></div>

                                    <span class="banner-bg__text-block banner-bg__text-3 u-c-secondary">Enjoy Free Shipping when you buy 2 items and above!</span>

                                    <a class="banner-bg__shop-now btn--e-secondary" href="shop-side-version-2.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 5 ======-->


            <!--====== Section 6 ======-->
            <div class="u-s-p-y-60">

                

            




            <!--====== Section 9 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon"><i class="fas fa-truck"></i></div>
                                    <div class="service__info-wrap">

                                        <span class="service__info-text-1">Free Shipping</span>

                                        <span class="service__info-text-2">Free shipping on all US order or order above $200</span></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon"><i class="fas fa-redo"></i></div>
                                    <div class="service__info-wrap">

                                        <span class="service__info-text-1">Shop with Confidence</span>

                                        <span class="service__info-text-2">Our Protection covers your purchase from click to delivery</span></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                                    <div class="service__info-wrap">

                                        <span class="service__info-text-1">24/7 Help Center</span>

                                        <span class="service__info-text-2">Round-the-clock assistance for a smooth shopping experience</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 9 ======-->


           


            <!--====== Section 11 ======-->
            <div class="u-s-p-b-90 u-s-m-b-30">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">CLIENTS FEEDBACK</h1>

                                    <span class="section__span u-c-silver">WHAT OUR CLIENTS SAY</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">

                        <!--====== Testimonial Slider ======-->
                        <div class="slider-fouc">
                            <div class="owl-carousel" id="testimonial-slider">
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="{{asset('assets')}}/images/about/test-1.jpg" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                        </blockquote>

                                        <span class="testimonial__author">John D. / DVNTR Inc.</span>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="{{asset('assets')}}/images/about/test-2.jpg" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                        </blockquote>

                                        <span class="testimonial__author">John D. / DVNTR Inc.</span>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="{{asset('assets')}}/images/about/test-3.jpg" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                        </blockquote>

                                        <span class="testimonial__author">John D. / DVNTR Inc.</span>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="{{asset('assets')}}/images/about/test-4.jpg" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                        </blockquote>

                                        <span class="testimonial__author">John D. / DVNTR Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Testimonial Slider ======-->
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 11 ======-->


            <!--====== Section 12 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">

                        
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 12 ======-->
        </div>
        <!--====== End - App Content ======-->


        @include('theme.partials.footer')

        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick-look">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.hml">Home</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">Electronics</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">DSLR Cameras</a></li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="js-product-detail-modal">
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="{{asset('assets')}}/images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span></div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span></div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form class="pd-detail__form">
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span></div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span></div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="{{asset('assets')}}/images/product/electronic/product1.jpg" alt=""></div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW CART</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO CHECKOUT</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->


       
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="{{asset('assets')}}/js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{asset('assets')}}/js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="{{asset('assets')}}/js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>