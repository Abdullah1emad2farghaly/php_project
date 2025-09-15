<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController
{
    public function index(){
        $product4 = Product::limit(4)->get();
        return view('website.index', compact('product4'));
    }
    public function contact(){
        return view('website.contact');
    }
    public function about(){
        return view('website.about');
    }
    public function login(){
        return view('website.sign_in');
    }
    public function signup(){
        return view('website.sign_up');
    }

    public function checkout(){
        return view('website.checkout');
    }
}
