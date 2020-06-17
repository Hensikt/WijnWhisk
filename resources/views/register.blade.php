@extends('layouts.form')
@section('hero_content')

@endsection
@section('form_banner')

@endsection

@section('form')
    <h2>WijnWhisk Register</h2>
    <form action="">
        <label for=""><input placeholder="Username" type="text"></label>
        <label for=""><input placeholder="Password" type="password"></label>
        <label for=""><input placeholder="E-Mail" type="email"></label>
        <label for="">
            <select name="Country" id="country">
                <option value="Netherlands">Nederland</option>
                <option value="England">Engeland</option>
                <option value="Germany">Duitsland</option>
                <option value="France">Frankrijk</option>
            </select>
        </label>
        <button>Sign up</button>
    </form>
@endsection