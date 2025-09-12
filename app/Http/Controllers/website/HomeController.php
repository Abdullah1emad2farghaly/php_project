<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;


class HomeController
{
    public function index(){
        return view('website.index');
    }
}
