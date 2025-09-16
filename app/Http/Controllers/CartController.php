<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart($productId)
{
    $userId = Auth::id(); 

    $cart = Order::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();

    if ($cart) {
        $cart->quantity += 1;
        $cart->save();
    } else {
        Order::create([
            'user_id' => $userId,
            'product_id' => $productId,
            'quantity' => 1,
        ]);
    }

    return redirect()->back()->with('success', 'Product added to cart!');
}

public function viewCart()
{
    $userId = Auth::id(); 
    $products = DB::select("
        SELECT p.*, o.quantity, o.id as order_id
        FROM products p
        INNER JOIN orders o ON p.id = o.product_id
        WHERE o.user_id = ?
    ", [$userId]);

    $total = 0;
    foreach ($products as $product) {
        $total += $product->price * $product->quantity;
        }
    return view('website.cart', compact('products','total'));
}


    public function destroy($id){

        $order = Order::findOrFail($id);
        $order->delete();

    return redirect()->route('website.cart');
   }
   public function update(Request $request) {
      
    $quantities = $request->input('quantities'); // مصفوفة order_id => quantity
        foreach ($quantities as $orderId => $quantity) {
            DB::table('orders')->where('id', $orderId)->update([
                'quantity' => $quantity
            ]);
        }

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }

}
