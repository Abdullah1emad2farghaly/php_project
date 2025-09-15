<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;


class HomeController
{
    public function index(){
        return view('website.index');
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
    public function cart(){
        return view('website.cart');
    }
    public function single(){
        return view('website.single');
    }
    public function wishlist(){
        return view('website.wishlist');
    }
}
