@include('theme.partials.header')


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">Wishlist</h1>
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
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <!--====== Wishlist Products ======-->
                    @if(session()->has('wishlist') && count(session('wishlist')) > 0)
                        @foreach(session('wishlist') as $product)
                            <div class="w-r u-s-m-b-30">
                                <div class="w-r__container">
                                    <div class="w-r__wrap-1">
                                        <div class="w-r__img-wrap">
                                            <img class="u-img-fluid" src="{{ asset('storage/' . $product['image']) }}" alt="">
                                        </div>
                                        <div class="w-r__info">
                                            <span class="w-r__name">
                                                <a href="">{{ $product['name'] }}</a>
                                            </span>
                                            <span class="w-r__category">
                                                <a href="">{{ $product['category_name'] }}</a>
                                            </span>
                                            <span class="w-r__price">
                                                <!--<span class="w-r__discount"></span>-->
                                                <span class="w-r__price">{{ $product['price']}}</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="w-r__wrap-2 " style='display :flex;'>
                                    
                                   <div><form action="{{ route('cart.add', $product['id']) }}" method="POST">
                    @csrf
                    <button class="w-r__link btn--e-transparent-platinum-b-2" type="submit" title="Add to Cart">
                        <i ></i> ADD TO CART
                    </button>
                </form>
                </div>
                                        
                                       <div>
    <form action="{{ route('product.details', ['id' => $product['id']]) }}" method="GET" style="display: inline;">
        <button class="w-r__link btn--e-transparent-platinum-b-2" type="submit" title="product details">
            VIEW
        </button>
    </form>
</div>
<div>
    <form action="{{ route('wishlist.remove', ['id' => $product['id']]) }}" method="GET" style="display: inline;">
        <button class="w-r__link btn--e-transparent-platinum-b-2" type="submit" title="Remove from wishlist">
            REMOVE
        </button>
    </form>
</div>

                                    
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h4 class='u-s-m-b-15'  style='text-align: center;'>No products in your wishlist.</h4>
                    @endif
                    <!--====== End - Wishlist Products ======-->

                </div>
                <div class="col-lg-12">
                    <div class="route-box">
                        <div class="route-box__g">
                            <a class="route-box__link" href="{{ route('theme.index') }}"><i class="fas fa-long-arrow-alt-left"></i>
                                <span>CONTINUE SHOPPING</span></a>
                        </div>
                        <div class="route-box__g">
                            <a class="route-box__link" href="{{ route('wishlist.clear') }}"><i class="fas fa-trash"></i>
                                <span>CLEAR WISHLIST</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->


        @include('theme.partials.footer')

        <!--====== Modal Section ======-->


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
        <!--====== End - Modal Section ======-->
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