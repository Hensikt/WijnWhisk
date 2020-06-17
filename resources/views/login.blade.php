@extends('layouts.form')
@section('hero_content')

@endsection
@section('form_banner')

@endsection

@section('form')
    <h2>WijnWhisk Login</h2>
    <form action="">
        <label for=""><input placeholder="Username" type="text"></label>
        <label for=""><input placeholder="Password" type="text"></label>
        <a href="">FORGOTTEN PASSWORD</a>
        <button>Sign in</button>
    </form>
@endsection