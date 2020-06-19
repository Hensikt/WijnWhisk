@extends('layouts.form')
@section('hero_content')

@endsection
@section('form_banner')

@endsection

@section('form')
    <h2>WijnWhisk Login</h2>
    <form action="http://wijnwhisk.nl/account">
        <label for=""><input id="userName" placeholder="Username" type="text"></label>
        <label for=""><input id="userPw"   placeholder="Password" type="text"></label>
        <a href="">FORGOTTEN PASSWORD</a>
        <input id="login_btn" type="submit" value="login" onclick="check()">
    </form>
@endsection