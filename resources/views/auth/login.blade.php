<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('assets')}}/images/favicon.png" rel="shortcut icon">
    <title>masterpiece</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <!-- إضافة مكتبة SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/app.css">
</head>
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>


<!--====== Main App ======-->
<div id="app">
    <!--====== App Content ======-->
    <div class="app-content">
        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list">
                                <li class="has-separator">
                                    <a href="{{route('theme.index')}}">Home</a>
                                </li>
                                <li class="is-marked">
                                    <a href="">login</a>
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
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">LOGIN</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section__content">
                <div class="container">
                    <div class="row row--center">
                        <div class="col-lg-6 col-md-8 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                    <form class="l-f-o__form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!-- Email Address -->
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="login-email">E-MAIL *</label>
                                            <input class="input-text input-text--primary-style" type="email" id="login-email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter E-mail">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <!-- Password -->
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="login-password">PASSWORD *</label>
                                            <input class="input-text input-text--primary-style" type="password" id="login-password" name="password" required autocomplete="current-password" placeholder="Enter Password">
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label">
                                                <input type="checkbox" name="remember" id="remember_me"> Remember Me
                                            </label>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">
                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">LOGIN</button>
                                            </div>
                                            <div class="u-s-m-b-30">
                                                @if (Route::has('password.request'))
                                                    <a class="gl-link" href="{{ route('password.request') }}">Lost Your Password?</a>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="u-s-m-b-30"></div>
                                        <h1 class="gl-h1"> NEW CUSTOMER ?</h1>
                                        <div class="u-s-m-b-15">
                                            <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="{{ route('register') }}">CREATE AN ACCOUNT</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 2 ======-->
    </div>
</div>
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



   