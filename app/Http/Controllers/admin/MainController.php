<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
 public function index()
{
    $totalSales = Product::where('created_at', '>=', now()->subDays(7))
        ->sum('price');

    return view('admin.index', compact('totalSales'));
}

    public function create(){
        return view('admin.create');
    }
    public function customers(){
        $users = User::where('role','=','user')->get();
        return view('admin.customers', compact('users'));
    }
    public function orders(){
        return view('admin.orders');
    }

}
