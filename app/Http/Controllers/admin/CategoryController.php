<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.categories.create',compact('categories'));
    }
    public function store(CategoryRequest $request){
        Category::Create($request->all());
        return redirect()->back()->with('msg', 'created successfully');
    }
}
