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

                      <a style="font-size: 25px; font-weight: bold; color: #000; text-decoration: none;" href="{{ route('theme.index') }}">
    LEVO
</a>

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

                                        <a>CATEGORIES<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>

                                                <a href="{{ url('/ourproducts/sugar free') }}">sugar free</a></li>
                                                <li>

                                                <a href="{{ url('/ourproducts/gluten free') }}">gluten free</a></li>
                                            <li>
                                    

                                                <a href="{{ url('/ourproducts/Dairy Free') }}">Dairy Free</a></li>
                                            <li>

                                                <a href="{{ url('/ourproducts/keto') }}">keto</a></li>
                                            <li>

                                                <a href="{{ url('/ourproducts/Vegan') }}">Vegan</a></li>
                                            <li>

                                                <a href="{{ url('/ourproducts/High Protein') }}">High Protein</a></li>
                                                <li>

                                                <a href="{{ url('/ourproducts/Healthy for Kids') }}">Healthy for Kids</a></li>
                                                <li>

                                                <a href="{{ url('/ourproducts/special occasions') }}">special occasions</a></li>
                                            
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li>

                                        <a href="{{ url('/about') }}">ABOUT US</a></li>
                                    <li>

                                        <a href="{{ url('/contact') }}">CONTACT US</a></li>
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

                                        <a href="{{ route('profile.edit') }}"><i class="far fa-user-circle"></i></a>

                                        
                                    

                                       
                                    <li>

                                        <a href="{{ route('wishlist') }}"><i class="far fa-heart"></i></a></li>
                                    <li class="has-dropdown">

                                        <a href="{{ route('cart.index') }}" class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                            <span class="total-item-round">{{$totalItems}}</span></a>
                                            

                                        
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->
        