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
}
