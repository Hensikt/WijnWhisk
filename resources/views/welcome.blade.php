@extends('layouts.master')
@section('title', 'WijnWhisk')

@section('hero_content')

@endsection
@section('content')
{{--    <div class="collection1">--}}
{{--        <a href="/collection/Yamazaki">--}}
{{--            <img class="collection__image" src="{{ asset('css/Images/collection-yamazaki-2.jpg') }}" alt="">--}}
{{--            <h2 class="collection__title">Yamazaki Collection</h2>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div class="collection2">--}}
{{--        <a href="/collection/frenchMix">--}}
{{--            <img class="collection__image" src="{{ asset('css/Images/collection-yamazaki-2.jpg') }}" alt="">--}}
{{--            <h2 class="collection__title">Hakushu Collection</h2>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div class="collection3">--}}
{{--        <a href="/collection/nikka">--}}
{{--            <img class="collection__image" src="{{ asset('css/Images/collection-yamazaki-2.jpg') }}" alt="">--}}
{{--            <h2 class="collection__title">Hibiki Collection</h2>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div class="collection4">--}}
{{--        <a href="/collection/chateau">--}}
{{--            <img class="collection__image" src="{{ asset('css/Images/collection-yamazaki-2.jpg') }}" alt="">--}}
{{--            <h2 class="collection__title">Collection name</h2>--}}
{{--        </a>--}}
{{--    </div>--}}

    <div class="collection_box">
        <a href="/collection/Yamazaki" class="collection_link">
        <img src="{{ asset("css/Images/Yamazaki.png") }}" alt="" class="collection_img">
        <div class="collection_info">
            <h2 class="collection_h2">Yamazaki collection</h2>
            <p class="collection_p">Spiritual and deep, made at Yamazaki Distillery, the soulplace of Japanese whisky, its signature multi-layered taste is highly praised by whisky connoisseurs all over the world.</p>
            <div class="collection_read">
                More info
            </div>
        </div>
        </a>
    </div>
    <div class="collection_box">
    <a href="/collection/Yamazaki" class="collection_link">
        <img src="{{ asset("css/Images/Yamazaki-2.png") }}" alt="" class="collection_img">
        <div class="collection_info">
            <h2 class="collection_h2">Hibiki collection</h2>
            <p class="collection_p">"Kanzen" or complete, Hibiki® Whisky is a harmonious blend of innumerous malt and grain whiskies which are meticulously blended to create a full orchestra of flavors and aromas.</p>
            <div class="collection_read">
                More info
            </div>
        </div>
    </a>
</div>
    <div class="collection_box">
    <a href="/collection/Yamazaki" class="collection_link">
        <img src="{{ asset("css/Images/Yamazaki.png") }}" alt="" class="collection_img">
        <div class="collection_info">
            <h2 class="collection_h2">Yamazaki collection</h2>
            <p class="collection_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
            <div class="collection_read">
                More info
            </div>
        </div>
    </a>
</div>
    <div class="collection_box">
    <a href="/collection/Yamazaki" class="collection_link">
        <img src="{{ asset("css/Images/Yamazaki.png") }}" alt="" class="collection_img">
        <div class="collection_info">
            <h2 class="collection_h2">Yamazaki collection</h2>
            <p class="collection_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
            <div class="collection_read">
                More info
            </div>
        </div>
    </a>
</div>

@endsection
