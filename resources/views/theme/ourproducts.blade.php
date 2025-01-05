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
        <form method="GET" action="{{ route('theme.ourproducts', $category->name) }}" class="tool-style__form-wrap" id="filterForm">
            <div class="u-s-m-b-8">
                <select name="show" class="select-box select-box--transparent-b-2" onchange="document.getElementById('filterForm').submit();">
                    <option value="8" {{ request('show') == '8' ? 'selected' : '' }}>Show: 8</option>
                    <option value="12" {{ request('show') == '12' ? 'selected' : '' }}>Show: 12</option>
                    <option value="16" {{ request('show') == '16' ? 'selected' : '' }}>Show: 16</option>
                    <option value="28" {{ request('show') == '28' ? 'selected' : '' }}>Show: 28</option>
                </select>
            </div>
            <div class="u-s-m-b-8">
                <select name="sort" class="select-box select-box--transparent-b-2" onchange="document.getElementById('filterForm').submit();">
                    <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Sort By: Newest Items</option>
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Sort By: Lowest Price</option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Sort By: Highest Price</option>
                </select>
            </div>
        </form>
    </div>
</div>


                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product-m">
                                            <div class="product-m__thumb">
                                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">
                                                    <img class="aspect__img" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                                </a>
                                                <div class="product-m__quick-look">
                                                    <a href="{{ route('product.details', $product->id) }}" data-tooltip="tooltip" data-placement="top" title="product details">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                                                                                        <a class="far fa-heart" href="{{ route('wishlist.add', $product->id) }}" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="product-m__content">
                                                <div class="product-m__category">
                                                    <a href="#">{{ $category->name }}</a>
                                                </div>
                                                <div class="product-m__name">
                                                    <a href="#">{{ $product->name }}</a>
                                                </div>
                                                <div class="product-m__price">${{ $product->price }}</div>
                                                <div class="product-m__hover">
                                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                                        @csrf
                                                        <button class="w-r__link btn--e-brand-b-2" type="submit" title="Add to Cart">Add to Cart</button>
                                                    </form>
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination-wrapper">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            {{ $products->appends(request()->query())->links() }}
        </ul>
    </nav>
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
<style>
.pagination-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 15px;
}

.pagination {
    display: flex;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.pagination li {
    margin: 0 3px;
}

.pagination li a {
    color: #555;
    padding: 6px 10px;
    font-size: 14px; /* حجم الخط العام */
    border: 1px solid #ddd;
    text-decoration: none;
    border-radius: 3px;
    transition: background-color 0.3s, color 0.3s;
}

.pagination li a:hover {
    background-color: #D2691E;
    color: white;
}

.pagination li.active a {
    background-color: #D2691E;
    color: white;
    pointer-events: none;
}

.pagination li.disabled a {
    color: #ccc;
    border: 1px solid #ccc;
}

/* تخصيص حجم الأسهم */
.pagination li a::before {
    content: '←'; /* سهم يسار */
    font-size: 12px; /* تصغير حجم السهم */
}

.pagination li a::after {
    content: '→'; /* سهم يمين */
    font-size: 12px; /* تصغير حجم السهم */
}

/* تخصيص اتجاه السهم في رابط "Previous" */
.pagination li:first-child a::before {
    content: '«'; /* سهم السابق */
}

/* تخصيص اتجاه السهم في رابط "Next" */
.pagination li:last-child a::after {
    content: '»'; /* سهم التالي */
}
</style>


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

