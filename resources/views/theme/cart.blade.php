@include('theme.partials.header')

<!--====== App Content ======-->
<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="is-marked">
                                <a href="cart.html">Cart</a>
                            </li>
                        </ul>
                    </div>
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
                            <h1 class="section__heading u-c-secondary">SHOPPING CART</h1>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                        <div class="table-responsive">
                            <table class="table-p">
                                <tbody>
                                    @foreach($cart as $item)
                                    <tr>
                                        <td>
                                            <div class="table-p__box">
                                                <div class="table-p__img-wrap">
                                                   @if(isset($item['image']))
                        <img class="u-img-fluid" src="{{ asset('assets/images/product/' . $item['image']) }}" alt="">
                    @else
                        <img class="u-img-fluid" src="{{ asset('assets/images/default.png') }}" alt="Default Image">
                    @endif
                                                </div>
                                                <div class="table-p__info">
                                                    <span class="table-p__name">
                                                        <a href="product-detail.html">{{ $item['name'] }}</a>
                                                    </span>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="table-p__price">${{ $item['price'] }}</span>
                                        </td>
                                        <td>
                                            <div class="table-p__input-counter-wrap">
                                                <div class="input-counter">
                                                    <span class="input-counter__minus fas fa-minus"></span>
                                                    <input class="input-counter__text input-counter--text-primary-style" type="text" value="{{ $item['quantity'] }}" data-min="1" data-max="1000">
                                                    <span class="input-counter__plus fas fa-plus"></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-p__del-wrap">
                                                <a class="far fa-trash-alt table-p__delete-link" href="{{ route('cart.remove', $item['id']) }}"></a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="route-box">
                            <div class="route-box__g1">
                                <a class="route-box__link" href={{route('theme.index')}}>
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                    <span>CONTINUE SHOPPING</span>
                                </a>
                            </div>
                            <div class="route-box__g2">
                                <a class="route-box__link" href="cart.html">
                                    <i class="fas fa-trash"></i>
                                    <span>CLEAR CART</span>
                                </a>
                                <a class="route-box__link" href="">
                                    <i class="fas fa-sync"></i>
                                    <span>UPDATE CART</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->


    <!--====== Section 3 ======-->
<div class="u-s-p-b-60">
    <!--====== Section Content ======-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                <!-- تحقق إذا كانت السلة تحتوي على منتجات قبل السماح بالانتقال إلى الـ checkout -->
                @php
                    $cart = Cookie::get('cart') ? json_decode(Cookie::get('cart'), true) : [];
                @endphp

                <form class="f-cart" action="{{ route('cart.update') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <!-- إذا كانت السلة فارغة عرض رسالة بدلاً من الزر -->
                            @if(count($cart) > 0)
    <a href="{{ route('checkout.show') }}" class="btn btn--e-brand-b-2">PROCEED TO CHECKOUT</a>
@else
    <button class="btn btn--e-brand-b-2" type="button" disabled>Your cart is empty</button>
@endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 3 ======-->

</div>
<!--====== End - App Content ======-->

@include('theme.partials.footer')

<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/jquery.shopnav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

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
