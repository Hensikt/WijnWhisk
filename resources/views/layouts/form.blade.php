<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/collection.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-nav.css') }}">
    <script src="{{ asset('js/mobile_nav.js') }}"></script>
</head>
<body>
<header id="header">
    <a href="<?php echo url('/')?>"><h1>Wijn<span>Whisk</span></h1></a>
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
        <a href="/">Collection</a>
        <a href=""></a>
        <a href=""></a>
    </div>
</div>
<div class="hero">
    @yield('hero_content')
</div>
<div class="wrapper">
    <div class="row column">
        <div class="container">
            <div class="banner">
                @section('form_banner')
                @show
            </div>
        </div>

        <div class="container">
            <div class="container__form">
                @section('form')
                @show
            </div>
        </div>
    </div>
</div>
</body>
</html>