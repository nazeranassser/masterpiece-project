@include('theme.partials.header')




        <!--====== App Content ======-->
        <div class="app-content">


            


            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

 <!--====== 88888888888888888888888888888888888888888888888888888888888888888888888888======-->


               <!--====== Section Content ======-->
<div class="section__content">
    <div class="container">
        <div class="checkout-f">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="checkout-f__h1">DELIVERY INFORMATION</h1>
                    <form class="checkout-f__delivery" method="POST" action="{{ route('checkout.placeOrder') }}">
                        <div class="u-s-m-b-30">
                            <!-- First Name, Last Name -->
                            <div class="gl-inline">
                                <div class="u-s-m-b-15">
                                    <label class="gl-label" for="billing-fname">FIRST NAME *</label>
                                    <input class="input-text input-text--primary-style" type="text" name="billing-fname" id="billing-fname" required>
                                </div>
                                <div class="u-s-m-b-15">
                                    <label class="gl-label" for="billing-lname">LAST NAME *</label>
                                    <input class="input-text input-text--primary-style" type="text" name="billing-lname" id="billing-lname" required>
                                </div>
                            </div>

                            <!-- E-MAIL -->
                            <div class="u-s-m-b-15">
                                <label class="gl-label" for="billing-email">E-MAIL *</label>
                                <input class="input-text input-text--primary-style" type="email" name="billing-email" id="billing-email" required>
                            </div>

                            <!-- PHONE -->
                            <div class="u-s-m-b-15">
                                <label class="gl-label" for="billing-phone">PHONE *</label>
                                <input class="input-text input-text--primary-style" type="text" name="billing-phone" id="billing-phone" required>
                            </div>

                            <!-- STREET ADDRESS -->
                            <div class="u-s-m-b-15">
                                <label class="gl-label" for="billing-street">STREET ADDRESS *</label>
                                <input class="input-text input-text--primary-style" type="text" name="billing-street" id="billing-street" placeholder="House name and street name" required>
                            </div>
                            <div class="u-s-m-b-15">
                                <label for="billing-street-optional"></label>
                                <input class="input-text input-text--primary-style" type="text" name="billing-street-optional" id="billing-street-optional" placeholder="Apartment, suite unit etc. (optional)">
                            </div>

                            <!-- ORDER NOTE -->
                            <div class="u-s-m-b-10">
                                <label class="gl-label" for="order-note">ORDER NOTE</label>
                                <textarea class="text-area text-area--primary-style" id="order-note" name="order-note"></textarea>
                            </div>

                            <!-- Create Account Option (optional) -->
                            <div class="collapse u-s-m-b-15" id="create-account">
                                <span class="gl-text u-s-m-b-15">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</span>
                                <div>
                                    <label class="gl-label" for="reg-password">Account Password *</label>
                                    <input class="input-text input-text--primary-style" type="password" name="reg-password" id="reg-password">
                                </div>
                            </div>

                            <button class="btn btn--e-transparent-brand-b-2" type="submit">SAVE</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
    <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

    <?php
    // جلب السلة من الكوكيز
    $cart = json_decode($_COOKIE['cart'] ?? '[]', true);

    // التحقق مما إذا كانت السلة مصفوفة وليست null
    if (!is_array($cart)) {
        $cart = [];
    }
    ?>

    <!-- Order Summary -->
    <div class="o-summary">
        <div class="o-summary__section u-s-m-b-30">
            <div class="o-summary__item-wrap gl-scroll">
                <!-- Loop Through Cart Items -->
                @forelse($cart as $item)
                <div class="o-card">
                    <div class="o-card__flex">
                        <div class="o-card__img-wrap">
                            <img class="u-img-fluid" src="{{ asset('assets/images/product/' . $item['product_id'] . '.jpg') }}" alt="Product Image">
                        </div>
                        <div class="o-card__info-wrap">
                            <span class="o-card__name">
                                <a href="{{ url('product-detail/' . $item['product_id']) }}">{{ $item['product_name'] }}</a>
                            </span>
                            <span class="o-card__quantity">Quantity x {{ $item['quantity'] }}</span>
                            <span class="o-card__price">${{ number_format($item['price'], 2) }}</span>
                        </div>
                    </div>
                    <a href="{{ url('cart/remove/' . $item['product_id']) }}" class="o-card__del far fa-trash-alt"></a>
                </div>
                @empty
                <p class="u-s-m-b-30">Your cart is empty.</p>
                @endforelse
            </div>
        </div>

        <!-- Order Total -->
        <div class="o-summary__section u-s-m-b-30">
            <div class="o-summary__box">
                <table class="o-summary__table">
                    <tbody>
                        <tr>
                            <td>SHIPPING</td>
                            <td>$4.00</td>
                        </tr>
                        <tr>
                            <td>TAX</td>
                            <td>$0.00</td>
                        </tr>
                        <tr>
                            <td>SUBTOTAL</td>
                            <td>${{ number_format($total_amount, 2) }}</td>
                        </tr>
                        <tr>
                            <td>GRAND TOTAL</td>
                            <td>${{ number_format($total_amount + 4, 2) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



                        <!-- Payment Information -->
                        <div class="o-summary__section u-s-m-b-30">
                            <div class="o-summary__box">
                                <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                <form class="checkout-f__payment" method="POST" action="{{ route('checkout.placeOrder') }}">
                                    @csrf
                                    <!-- Payment Method Selection -->
                                    <div class="u-s-m-b-10">
                                        <div class="radio-box">
                                            <input type="radio" id="cash-on-delivery" name="payment" value="cash-on-delivery" required>
                                            <div class="radio-box__state radio-box__state--primary">
                                                <label class="radio-box__label" for="cash-on-delivery">Cash on Delivery</label>
                                            </div>
                                        </div>
                                        <span class="gl-text u-s-m-t-6">Pay Upon Cash on delivery. (This service is only available for some countries)</span>
                                    </div>

                                    <div>
                                        <button class="btn btn--e-brand-b-2" type="submit">PLACE ORDER</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section Content ======-->

            
            
            
            
            
            </div>
            <!--====== End - Section 3 ======-->
        </div>
        <!--====== End - App Content ======-->


        


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