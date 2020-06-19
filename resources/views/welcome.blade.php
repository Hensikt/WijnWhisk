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
        <img src="{{ asset('css/Images/Yamazaki.png') }}" alt="" class="collection_img">
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
        <img src="https://bit.ly/3dhLpJO" alt="" class="collection_img">
        <div class="collection_info">
            <h2 class="collection_h2">Yamazaki collection</h2>
            <p class="collection_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
        </div>
    </a>
</div>
<div class="collection_box">
    <a href="/collection/Yamazaki" class="collection_link">
        <img src="https://bit.ly/3dhLpJO" alt="" class="collection_img">
        <div class="collection_info">
            <h2 class="collection_h2">Yamazaki collection</h2>
            <p class="collection_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
        </div>
    </a>
</div>
<div class="collection_box">
    <a href="/collection/Yamazaki" class="collection_link">
        <img src="https://bit.ly/3dhLpJO" alt="" class="collection_img">
        <div class="collection_info">
            <h2 class="collection_h2">Yamazaki collection</h2>
            <p class="collection_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
        </div>
    </a>
</div>
@endsection
