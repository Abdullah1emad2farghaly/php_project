<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }
    public function create (){
        $categories = Category::get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(ProductRequest $request){
        Product::Create($request->all());
        return redirect()->back()->with('msg', 'created successfully');
    }

    public function show ($id){
        $product = Product::findorfail($id);
        return view('admin.products.show', compact('product'));
    }



}
