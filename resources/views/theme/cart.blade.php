@if(session()->has('success'))
    <div id="cart-notification" class="notification">
        <p>{{ session('success') }}</p>
    </div>
@endif

@if(session()->has('error'))
    <div id="cart-notification" class="notification error">
        <p>{{ session('error') }}</p>
    </div>
@endif


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
                        <img class="u-img-fluid" src="{{ asset('storage/' . $item['image'])}} " alt="Product Image">
                    @else
                        <img class="u-img-fluid" src="{{ asset('assets/images/default.png') }}" alt="Default Image">
                    @endif
                                                </div>
                                                <div class="table-p__info">
                                                    <span class="table-p__name">
                                                        <a href="">{{ $item['name'] }}</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="table-p__price">${{ $item['price'] }}</span>
                                        </td>
                                        <td>
                                            <div class="table-p__input-counter-wrap">
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $item['product_id'] }}">
                                                    <div class="input-counter">
                                                        <span class="input-counter__minus fas fa-minus"></span>
                                                        <input class="input-counter__text input-counter--text-primary-style" type="text" name="quantity" value="{{ $item['quantity'] }}" data-min="1" data-max="1000">
                                                        <span class="input-counter__plus fas fa-plus"></span>
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="table-p__del-wrap">
                                                <form action="{{ route('cart.remove', $item['product_id']) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="w-r__link btn--e-transparent-platinum-b-2" type="submit" title="Remove from wishlist">
                                                         Remove
                                                    </button>
                                                </form>
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
                                <a class="route-box__link" href="{{ route('theme.index') }}">
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                    <span>CONTINUE SHOPPING</span>
                                </a>
                            </div>
                            <div class="route-box__g2">
                                
                                <!-- زر تحديث السلة -->
                                <a class="route-box__link" type="submit">
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                    <form class="f-cart" action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <!-- إذا كانت السلة فارغة عرض رسالة بدلاً من الزر -->
                                @if(count($cart) > 0)
                                    <a href="{{ route('cart.checkout') }}" class="btn btn--e-brand-b-2">PROCEED TO CHECKOUT</a>
                                @else
                                    <button class="btn btn--e-brand-b-2" type="button" disabled>Your cart is empty</button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - App Content ======-->

@include('theme.partials.footer')


<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/jquery.shopnav.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
@if(session()->has('success') || session()->has('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var notification = document.getElementById('cart-notification');
            notification.classList.add('show');

            setTimeout(function () {
                notification.classList.remove('show');
            }, 3000); // تختفي الرسالة بعد 3 ثواني
        });
    </script>
@endif

<style>
/* ====== Flash Message Notification Styles ====== */
.notification {
    position: fixed;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #28a745; /* اللون الأخضر للرسائل الناجحة */
    color: white;
    padding: 15px;
    border-radius: 5px;
    font-size: 16px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    display: none; /* إخفاء الرسالة بشكل افتراضي */
    z-index: 9999;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.notification.error {
    background-color: #dc3545; /* اللون الأحمر للرسائل الخطأ */
}

.notification.show {
    display: block;
    opacity: 1;
}

</style>

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
