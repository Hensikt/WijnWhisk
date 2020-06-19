<?php


namespace App\Http\Controllers;


class FormsController
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function account(){
        return view('account');
    }
}