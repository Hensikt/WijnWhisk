<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/mobile-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}">
    <script src="{{ asset('js/mobile_nav.js') }}"></script>
</head>
<body>
    <header id="header">
        <a href="<?php echo url('/')?>"><h1 class="header_a">Wijn<span>Whisk</span></h1></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="/">Overlay</a></li>
                    <li><a href="/">Collections</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            <a onclick="openNav()" class="menu">menu</a>
        </nav>
    </header>
    <div id="mobile__menu" class="overlay">
        <a class="close" onclick="closeNav()">&times;</a>
            <div class="overlay__content">
                <a href="/">Overlay</a>
                <a href="/">Collections</a>
                <a href=""></a>
                <a href=""></a>
            </div>
    </div>
    <div class="hero">
        @section('hero')
        @show
    </div>
    <div class="wrapper">
        <div class="row">
            <div class="container">
                <h1 class="information__title">@yield('collection_title')</h1>
                <h4 class="information__subtitle">@yield('collection_subtitle')</h4>

                <div class="information__smalldesc">@yield('collection_smalldesc')</div>
                <div class="information__bigdesc">@yield('collection_bigdesc')</div>
                <div class="information__carousel--information">
                    @section('collection_carousel-information')
                        This is just a carousel
                    @show
                </div>
                <div class="information__desc">@yield('collection_desc')</div>
                    <p class="information__divider"></p>
                <div class="information__extra">@yield('collection_extra')</div>
                <div class="information__proceed">@yield('collection_proceed')</div>
            </div>
            <div class="container">
                <div class="information__carousel--selector">
                    @section('collection_carousel-selector')
                        <span class="text" onclick="currentSlide(1)">15 cl |</span>
                        <span class="text" onclick="currentSlide(2)">20 cl |</span>
                        <span class="text" onclick="currentSlide(3)">25 cl |</span>
                        <span class="text" onclick="currentSlide(4)">30 cl  </span>
                    @show
                </div>

                <div class="information__carousel--container">
                    @section('collection_carousel')
                        <div class="carousel--slide fade" style="display: block;">
                            <div class="carousel--number">1 / 4</div>
                            <img src="https://via.placeholder.com/360x500" alt="">
                            <div class="carousel--text">Test</div>
                        </div>

                        <div class="carousel--slide fade">
                            <div class="carousel--number">2 / 4</div>
                                <img src="https://via.placeholder.com/360x500" alt="">
                            <div class="carousel--text">Klein</div>
                        </div>

                        <div class="carousel--slide fade">
                            <div class="carousel--number">3 / 4</div>
                            <img src="https://via.placeholder.com/360x500" alt="">
                            <div class="carousel--text">Middelgroot</div>
                        </div>

                        <div class="carousel--slide fade">
                            <div class="carousel--number">4 / 4</div>
                            <img src="https://via.placeholder.com/360x500" alt="">
                            <div class="carousel--text">Groot</div>
                        </div>
                    @show
                </div>
            </div>
        </div>
    </div>
        <script src="{{ asset('js/carousel.js') }}"></script>
    </body>
</html>