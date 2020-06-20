@extends('layouts.header')
@section('content')

    <h1 id="welcome">Welcome "username" to your account page</h1>

    <h2>Uw abbonomenten.</h2>

    <p>Abbonoment: Yamazaki</p>
    <p>Groote: Klein</p>
    <p>Datum: <input type="date" value="2020-06-05"><input type="button" class="checkout" style="width: 5em; font-size: .9em; margin: 1em;" value="Sla op"></p>


    <script src="{{ asset('js/localstorage.js') }}"></script>
@endsection