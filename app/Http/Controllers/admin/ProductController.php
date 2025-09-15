<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request){
           $validated = $request->validate([
        'name'        => 'required|string|max:255',
        'description' => 'nullable|string',
        'price'       => 'required|numeric|min:0',
        'stock'       => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
        'img'       => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);
    $file= $validated['img'];
    $filename = $file->getClientOriginalName();
    $path = $file->storeAs('images', $filename,'public'); 
    $validated['img'] = $path;

        Product::Create($validated);
        return redirect()->back()->with('msg', 'created successfully');
    }

    public function show ($id){
        $product = Product::findorfail($id);
        return view('admin.products.show', compact('product'));
    }
    public function edit ($id){
        $product = Product::findorfail($id);
        $categories = Category::get();
        return view('admin.products.edit', compact('product','categories'));
    }
public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'name'        => 'required|string|max:255',
        'description' => 'nullable|string',
        'price'       => 'required|numeric|min:0',
        'stock'       => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
        'img'       => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);
     $file= $request->file('img');
     $filename = $file->getClientOriginalName();
     $path = $file->storeAs('images', $filename); 
     $validated['img'] = $path;
    $product->update($validated);
    return redirect()->route('admin.products.index')->with('msg', 'Product updated successfully');
}

    public function destroy($id){
        
        $product = Product::findOrFail($id);
        Storage::disk('public')->delete($product->img);
        $product->delete();

    return redirect()->route('admin.products.index')->with('msg', 'Product deleted successfully');
    }
    


}
