@extends('layouts.form')

@section('hero_content')

@endsection
@section('form_banner')

@endsection

@section('form')
    <h2>WijnWhisk Register</h2>
    <form id="register-form" action="">
        <input id="name"     type="text"     placeholder="Username">
        <input id="pw"       type="password" placeholder="Password">
        <input id="Email"    type="email"    placeholder="E-Mail"   value="a"/>
        <input id="rgstr_btn" class="button register__button" value="Get Account" type="submit" onclick="store()"/>
    </form>
@endsection