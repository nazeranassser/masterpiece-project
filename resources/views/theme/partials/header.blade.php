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

            <img class="preloader__img" src="{{asset('assets')}}/images/preloader.png" alt=""></div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        <!--====== Main Header ======-->
        <header class="header--style-1">

            


            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav">

                        <!--====== iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii need logo here  ======-->
                         <!--====== Main Logo ======-->

                        <a class="main-logo" href="{{route('theme.index')}}">

                            <img src="{{asset('assets')}}/images/logo/logo-1.png" alt=""></a>
                        <!--====== End - Main Logo ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li>

                                        <a href="{{route('theme.index')}}">HOME</a></li>
                                    <li class="has-dropdown">

                                       
                                    <li class="has-dropdown">

                                        <a>BLOG<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>

                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li>

                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li>

                                                <a href="blog-sidebar-none.html">Blog Sidebar None</a></li>
                                            <li>

                                                <a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li>

                                                <a href="blog-detail.html">Blog Details</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li>

                                        <a href="{{route('theme.about')}}">ABOUT US</a></li>
                                    <li>

                                        <a href="{{route('theme.contact')}}">CONTACT US</a></li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop" type="button"></button>

                            <span class="total-item-round">2</span>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->

                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                        <a><i class="far fa-user-circle"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a href="dashboard.html"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                                    <span>Account</span></a></li>
                                            <li>

                                                <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                                    <span>Signup</span></a></li>
                                            <li>

                                                <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>

                                                    <span>Signin</span></a></li>
                                            <li>

                                                <a href="signup.html"><i class="fas fa-lock-open u-s-m-r-6"></i>

                                                    <span>Signout</span></a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    <li>

                                       
                                    <li>

                                        <a href="{{route('theme.wishlist')}}"><i class="far fa-heart"></i></a></li>
                                    <li class="has-dropdown">

                                        <a href="" class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                            <span class="total-item-round">2</span></a>

                                        
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->