<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController 
{
     public function index(){
        // $usersOrders = User::select('users.name ','users.email', DB::raw('COUNT(orders.id) as total_orders'))
        // ->join('orders', 'users.id', '=', 'orders.user_id')
        // ->groupBy('users.name','users.email')
        // ->get();
        $usersOrders = User::select('users.name', 'users.id','users.email', DB::raw('COUNT(orders.id) as total_orders'))
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->groupBy('users.name', 'users.email','users.id')
        ->get();
        // return $usersOrders
        return view('admin.orders.index',compact('usersOrders'));
    }
    public function show($id)
    {
$products = DB::select("
    SELECT * 
    FROM products 
    WHERE products.id IN (
        SELECT orders.product_id  
        FROM orders 
        WHERE orders.user_id = ?
        GROUP BY orders.product_id
    )
", [$id]);

        
    return view('admin.orders.show',compact('products'));
    }

}

