<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrdersController 
{
     public function index(){
        $orders = Order::all();
        return view('admin.orders.index',compact('orders'));
    }
    public function show($id)
    {
    $order = Order::with(['user', 'items.product'])->findOrFail($id);
    return view('admin.orders.show',compact('order'));
    }

}

