<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController
{
    public function index(){
        $product4 = Product::inRandomOrder()->limit(4)->get();
        $product_4 = Product::inRandomOrder()->limit(4)->get();
        $product8 = Product::inRandomOrder()->limit(8)->get();
        return view('website.index', compact('product4','product_4','product8'));
    }
    public function allProducts() {
        $allProducts = Product::inRandomOrder()->get();
        return view('website.allProducts', compact('allProducts'));
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
