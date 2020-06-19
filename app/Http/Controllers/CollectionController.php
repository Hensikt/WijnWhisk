<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function yamazaki(){
        return view('yamazaki');
    }

    public function nikka(){
        return view('nikka');
    }

    public function frenchMix(){
        return view('frenchMix');
    }

    public function chateau(){
        return view('chateau');
    }

    public function yamazakiCheckout(){
        return view('yamazakiCheckout');
    }
//    public function Something(){
//        return view('');
//    }
}
