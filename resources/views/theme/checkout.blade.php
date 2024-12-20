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

                                        <a href="index.html">Home</a></li>
                                    <li class="is-marked">

                                        <a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="checkout-msg-group">
                                    <div class="msg u-s-m-b-30">

                                        <span class="msg__text">Returning customer?

                                            <a class="gl-link" href="#return-customer" data-toggle="collapse">Click here to login</a></span>
                                        <div class="collapse" id="return-customer" data-parent="#checkout-msg-group">
                                            <div class="l-f u-s-m-b-16">

                                                <span class="gl-text u-s-m-b-16">If you have an account with us, please log in.</span>
                                                <form class="l-f__form">
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-15">

                                                            <label class="gl-label" for="login-email">E-MAIL *</label>

                                                            <input class="input-text input-text--primary-style" type="text" id="login-email" placeholder="Enter E-mail"></div>
                                                        <div class="u-s-m-b-15">

                                                            <label class="gl-label" for="login-password">PASSWORD *</label>

                                                            <input class="input-text input-text--primary-style" type="text" id="login-password" placeholder="Enter Password"></div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-15">

                                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">LOGIN</button></div>
                                                        <div class="u-s-m-b-15">

                                                            <a class="gl-link" href="lost-password.html">Lost Your Password?</a></div>
                                                    </div>

                                                    <!--====== Check Box ======-->
                                                    <div class="check-box">

                                                        <input type="checkbox" id="remember-me">
                                                        <div class="check-box__state check-box__state--primary">

                                                            <label class="check-box__label" for="remember-me">Remember Me</label></div>
                                                    </div>
                                                    <!--====== End - Check Box ======-->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="msg">

                                        <span class="msg__text">Have a coupon?

                                            <a class="gl-link" href="#have-coupon" data-toggle="collapse">Click Here to enter your code</a></span>
                                        <div class="collapse" id="have-coupon" data-parent="#checkout-msg-group">
                                            <div class="c-f u-s-m-b-16">

                                                <span class="gl-text u-s-m-b-16">Enter your coupon code if you have one.</span>
                                                <form class="c-f__form">
                                                    <div class="u-s-m-b-16">
                                                        <div class="u-s-m-b-15">

                                                            <label for="coupon"></label>

                                                            <input class="input-text input-text--primary-style" type="text" id="coupon" placeholder="Coupon Code"></div>
                                                        <div class="u-s-m-b-15">

                                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">APPLY</button></div>
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
            <!--====== End - Section 2 ======-->


            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="checkout-f">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h1 class="checkout-f__h1">DELIVERY INFORMATION</h1>
                                    <form class="checkout-f__delivery">
                                        <div class="u-s-m-b-30">
                                            <div class="u-s-m-b-15">

                                                
                                                <!--====== End - Check Box ======-->
                                            </div>

                                            <!--====== First Name, Last Name ======-->
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-15">

                                                    <label class="gl-label" for="billing-fname">FIRST NAME *</label>

                                                    <input class="input-text input-text--primary-style" type="text" id="billing-fname" data-bill=""></div>
                                                <div class="u-s-m-b-15">

                                                    <label class="gl-label" for="billing-lname">LAST NAME *</label>

                                                    <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill=""></div>
                                            </div>
                                            <!--====== End - First Name, Last Name ======-->


                                            <!--====== E-MAIL ======-->
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-email">E-MAIL *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-email" data-bill=""></div>
                                            <!--====== End - E-MAIL ======-->


                                            <!--====== PHONE ======-->
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-phone">PHONE *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-phone" data-bill=""></div>
                                            <!--====== End - PHONE ======-->


                                            <!--====== Street Address ======-->
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-street">STREET ADDRESS *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-street" placeholder="House name and street name" data-bill=""></div>
                                            <div class="u-s-m-b-15">

                                                <label for="billing-street-optional"></label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-street-optional" placeholder="Apartment, suite unit etc. (optional)" data-bill=""></div>
                                            <!--====== End - Street Address ======-->


                            


                                            


                                           
                                            <div class="u-s-m-b-10">

                                                
                                            </div>
                                            
                                            <div class="collapse u-s-m-b-15" id="create-account">

                                                <span class="gl-text u-s-m-b-15">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</span>
                                                <div>

                                                    <label class="gl-label" for="reg-password">Account Password *</label>

                                                    <input class="input-text input-text--primary-style" type="text" data-bill id="reg-password"></div>
                                            </div>
                                            <div class="u-s-m-b-10">

                                                <label class="gl-label" for="order-note">ORDER NOTE</label><textarea class="text-area text-area--primary-style" id="order-note"></textarea></div>
                                            <div>

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">SAVE</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

                                    <!--====== Order Summary ======-->
                                    <div class="o-summary">
                                        <div class="o-summary__section u-s-m-b-30">
                                            <div class="o-summary__item-wrap gl-scroll">
                                                <div class="o-card">
                                                    <div class="o-card__flex">
                                                        <div class="o-card__img-wrap">

                                                            <img class="u-img-fluid" src="{{asset('assets')}}/images/product/electronic/product3.jpg" alt=""></div>
                                                        <div class="o-card__info-wrap">

                                                            <span class="o-card__name">

                                                                <a href="product-detail.html">Yellow Wireless Headphone</a></span>

                                                            <span class="o-card__quantity">Quantity x 1</span>

                                                            <span class="o-card__price">$150.00</span></div>
                                                    </div>

                                                    <a class="o-card__del far fa-trash-alt"></a>
                                                </div>
                                                <div class="o-card">
                                                    <div class="o-card__flex">
                                                        <div class="o-card__img-wrap">

                                                            <img class="u-img-fluid" src="{{asset('assets')}}/images/product/electronic/product18.jpg" alt=""></div>
                                                        <div class="o-card__info-wrap">

                                                            <span class="o-card__name">

                                                                <a href="product-detail.html">Nikon DSLR Camera 4k</a></span>

                                                            <span class="o-card__quantity">Quantity x 1</span>

                                                            <span class="o-card__price">$150.00</span></div>
                                                    </div>

                                                    <a class="o-card__del far fa-trash-alt"></a>
                                                </div>
                                                <div class="o-card">
                                                    <div class="o-card__flex">
                                                        <div class="o-card__img-wrap">

                                                            <img class="u-img-fluid" src="{{asset('assets')}}/images/product/women/product8.jpg" alt=""></div>
                                                        <div class="o-card__info-wrap">

                                                            <span class="o-card__name">

                                                                <a href="product-detail.html">New Dress D Nice Elegant</a></span>

                                                            <span class="o-card__quantity">Quantity x 1</span>

                                                            <span class="o-card__price">$150.00</span></div>
                                                    </div>

                                                    <a class="o-card__del far fa-trash-alt"></a>
                                                </div>
                                                <div class="o-card">
                                                    <div class="o-card__flex">
                                                        <div class="o-card__img-wrap">

                                                            <img class="u-img-fluid" src="{{asset('assets')}}/images/product/men/product8.jpg" alt=""></div>
                                                        <div class="o-card__info-wrap">

                                                            <span class="o-card__name">

                                                                <a href="product-detail.html">New Fashion D Nice Elegant</a></span>

                                                            <span class="o-card__quantity">Quantity x 1</span>

                                                            <span class="o-card__price">$150.00</span></div>
                                                    </div>

                                                    <a class="o-card__del far fa-trash-alt"></a>
                                                </div>
                                            </div>
                                        </div>
                                        
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
                                                            <td>$379.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>GRAND TOTAL</td>
                                                            <td>$379.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="o-summary__section u-s-m-b-30">
                                            <div class="o-summary__box">
                                                <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                                <form class="checkout-f__payment">
                                                    <div class="u-s-m-b-10">

                                                        <!--====== Radio Box ======-->
                                                        <div class="radio-box">

                                                            <input type="radio" id="cash-on-delivery" name="payment">
                                                            <div class="radio-box__state radio-box__state--primary">

                                                                <label class="radio-box__label" for="cash-on-delivery">Cash on Delivery</label></div>
                                                        </div>
                                                        <!--====== End - Radio Box ======-->

                                                        <span class="gl-text u-s-m-t-6">Pay Upon Cash on delivery. (This service is only available for some countries)</span>
                                                    </div>
                                                    <div class="u-s-m-b-10">

                                                        

                                                      

                                                        

                                                       

                                                        
                                                    
                                                    <div>

                                                        <button class="btn btn--e-brand-b-2" type="submit">PLACE ORDER</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Order Summary ======-->
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