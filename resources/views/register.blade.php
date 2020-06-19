@extends('layouts.form')

{{--@section('hero_content')--}}

{{--@endsection--}}
@section('form_banner')
    <div class="form_img"></div>
@endsection

@section('form')
    <form id="register-form" action="http://wijnwhisk.nl/account">
        <h2>Register</h2>
        <input id="name"     type="text"     placeholder="Username"  value=""/>
        <input id="pw"       type="password" placeholder="Password"  value=""/>
        <input id="Email"    type="text"     placeholder="E-Mail"    value=""/>
        <input id="rgstr_btn" class="button register__button" value="Get Account" type="submit" onclick="store()"/>
    </form>
@endsection