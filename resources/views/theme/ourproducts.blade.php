@include('theme.partials.header')
<!--====== App Content ======-->
<div class="app-content">
    <!--====== Section 1 ======-->
    <div class="u-s-p-y-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-p">
                        <div class="shop-p__toolbar u-s-m-b-30">
                            <div class="shop-p__tool-style">
                                <div class="tool-style__form-wrap">
                                    <div class="u-s-m-b-8">
                                        <select class="select-box select-box--transparent-b-2">
                                            <option>Show: 8</option>
                                            <option selected>Show: 12</option>
                                            <option>Show: 16</option>
                                            <option>Show: 28</option>
                                        </select>
                                    </div>
                                    <div class="u-s-m-b-8">
                                        <select class="select-box select-box--transparent-b-2">
                                            <option selected>Sort By: Newest Items</option>
                                            <option>Sort By: Latest Items</option>
                                            <option>Sort By: Best Selling</option>
                                            <option>Sort By: Best Rating</option>
                                            <option>Sort By: Lowest Price</option>
                                            <option>Sort By: Highest Price</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">
                                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="">
                                                    <img class="aspect__img" src="{{ $product->image_url }}" alt="{{ $product->name }}">
                                                </a>
                                                <div class="product-m__quick-look">
                                                    <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a>
                                                </div>
                                                <div class="product-m__add-cart">
                                                    <a class="btn--e-brand" href="#" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">
                                                    <a href="shop-side-version-2.html">{{ $category->name }}</a>
                                                </div>
                                                <div class="product-m__name">
                                                    <a href=">{{ $product->name }}</a>
                                                </div>
                                                <div class="product-m__rating gl-rating-style">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="product-m__review">()</span>
                                                </div>
                                                <div class="product-m__price">${{ $product->price }}</div>
                                                <div class="product-m__hover">
                                                    <div class="product-m__preview-description">
                                                        <span>{{ $product->description }}</span>
                                                    </div>
                                                    <div class="product-m__wishlist">
                                                        <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="u-s-p-y-60">
                            <!--====== Pagination ======-->
                            <ul class="shop-p__pagination">
                                <li class="is-active"><a href="shop-grid-full.html">1</a></li>
                                <li><a href="shop-grid-full.html">2</a></li>
                                <li><a href="shop-grid-full.html">3</a></li>
                                <li><a href="shop-grid-full.html">4</a></li>
                                <li><a class="fas fa-angle-right" href="shop-grid-full.html"></a></li>
                            </ul>
                            <!--====== End - Pagination ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->
</div>
<!--====== End - App Content ======-->
@include('theme.partials.footer')
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
