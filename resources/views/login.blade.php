@extends('layouts.form')
@section('form_banner')
    <img src="{{ asset('css/Images/stock-whiskey.png') }}" alt="">
@endsection

@section('form')
    <h2>WijnWhisk Login</h2>
    <form action="">
        <label for=""><input type="text">Username</label>
        <label for=""><input type="text">Password</label>
        <a href="">FORGOTTEN PASSWORD</a>
        <button>Sign up</button>
    </form>
@endsection