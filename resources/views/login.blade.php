@extends('layouts.form')
{{--@section('hero_content')--}}

{{--@endsection--}}
@section('form_banner')
    <div class="form_img"></div>
@endsection

@section('form')
        <form action="http://wijnwhisk.nl/account">
            <h2>Login</h2>
            <label for=""><input id="userName" placeholder="Username" type="text"></label>
            <label for=""><input id="userPw"   placeholder="Password" type="password"></label>
            <label for=""><input id="login_btn" type="submit" value="login" onclick="check()"></label>
        </form>
@endsection