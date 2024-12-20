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
                            <li class="has-separator"><a href="">Home</a></li>
                            <li class="is-marked"><a href="">Signin</a></li>
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
                            <h1 class="section__heading u-c-secondary">ALREADY REGISTERED?</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row row--center">
                    <div class="col-lg-6 col-md-8 u-s-m-b-30">
                        <div class="l-f-o">
                            <div class="l-f-o__pad-box">
                                <h1 class="gl-h1">SIGNIN</h1>
                                <span class="gl-text u-s-m-b-30">If you have an account with us, please log in.</span>

                                <!-- Login Form -->
                                <form class="l-f-o__form" action="{{ route('user.login.submit') }}" method="POST">
                                    @csrf
                                    
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="login-email">E-MAIL *</label>
                                        <input
                                            class="input-text input-text--primary-style"
                                            type="email"
                                            id="login-email"
                                            name="email"
                                            placeholder="Enter E-mail"
                                            value="{{ old('email') }}"
                                            required>
                                    </div>

                                    <div class="u-s-m-b-30">
                                        <label class="gl-label" for="login-password">PASSWORD *</label>
                                        <input
                                            class="input-text input-text--primary-style"
                                            type="password"
                                            id="login-password"
                                            name="password"
                                            placeholder="Enter Password"
                                            required>
                                    </div>

                                    <div class="gl-inline">
                                        <div class="u-s-m-b-30">
                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">LOGIN</button>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <a class="gl-link" href="{{ route('password.request') }}">Lost Your Password?</a>
                                        </div>
                                    </div>

                                    <div class="u-s-m-b-30">
                                        <!--====== Check Box ======-->
                                        <div class="check-box">
                                            <input type="checkbox" id="remember-me" name="remember">
                                            <div class="check-box__state check-box__state--primary">
                                                <label class="check-box__label" for="remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                        <!--====== End - Check Box ======-->
                                    </div>
                                </form>
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
