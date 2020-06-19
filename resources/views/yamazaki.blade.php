@extends('layouts.collection')
@section('title', 'WijnWhisk')

@section('hero')
{{--    <img src="{{ asset('css/Images/stock-whiskey.png') }}" class="desktop"         alt="This is just a placeholder">--}}
@endsection

@section('collection_title', 'Yamazaki Collection')
@section('collection_subtitle', 'The Pioneer of japansese whisky')
@section('collection_smalldesc')

@endsection

@section('collection_bigdesc')
    Yamazaki Whisky is Suntory's flagship single malt whisky,
    from Japan's first and oldest malt distillery,
    multi-layered with fruit and Mizunara aromas.
@endsection

@section('collection_carousel-information')
<h4>Yamazaki 12 years old</h4>
<span class="flavour_text">Succulent with soft fruit.</span><br>
<span class="indicator">color:</span> Pure Gold<br>
<span class="indicator">Nose:</span> Pineapple, grapefruit, candied orange, vanilla<br>
<span class="indicator">Palete:</span> Mizunara, Coconut, Cranberry, Butter<br>
<span class="indicator">Finish:</span> Sweet ginger, cinnamon, long Finish<br>
@endsection



@section('collection_carousel-selector')
    <span class="text" onclick="currentSlide(1)">12 years |</span>
    <span class="text" onclick="currentSlide(2)">18 years |</span>
    <span class="text" onclick="currentSlide(3)">25 years</span>
@endsection
@section('collection_carousel')
    <div class="carousel--slide fade" style="display: block;">
        <div class="carousel--number">1 / 3</div>
        <img src="{{ asset('css/Images/product-yamazaki-1.png') }}" alt="">
        <div class="carousel--text">12 Years</div>
    </div>

    <div class="carousel--slide fade">
        <div class="carousel--number">2 / 3</div>
        <img src="{{ asset('css/Images/product-yamazaki-2.png') }}" alt="">
        <div class="carousel--text">18 Years</div>
    </div>

    <div class="carousel--slide fade">
        <div class="carousel--number">3 / 3</div>
        <img src="{{ asset('css/Images/product-yamazaki-3.png') }}" alt="">
        <div class="carousel--text">25 Years</div>
    </div>
@endsection

@section('collection_desc')
    <h5>Select your Size:</h5>
    <a class="info__link" href="/faq">More info about</a>
@endsection

@section('collection_extra')

    <button class="selector">Test</button>
    <button class="selector">Small</button>
    <button class="selector">Medium</button>
    <button class="selector">Large</button>

@endsection

@section('collection_proceed')
    <form action="http://wijnwhisk.nl/collection/Yamazaki/checkout/">
        <button type="submit" class="checkout">Proceed to check out</button>
    </form>
@endsection

