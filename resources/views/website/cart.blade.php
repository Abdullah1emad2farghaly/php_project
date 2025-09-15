<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/cart.css">
    <link rel="stylesheet" href="/website/assets/css/footer.css">
    <!-- <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css"> -->
    <title>Shopping Cart</title>
</head>

<body>
    <div class="cart-container">
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="product-info">
                                <form action="{{ route('cart.destroy', $product->order_id) }}" method="post">
                                    @csrf
                                    @method('Delete')
                                    <button class="remove-btn" type="submit">×</button>
                                </form>
                                <img src="/storage/{{$product->img}}"
                                    alt="LCD Monitor black screen with stand on white background" width="70" height="50" />
                                <span class="product-text">{{$product->name}}</span>
                            </div>
                        </td>
                        <td class="price">${{ $product->price }}</td>
                        <td>
                            <input type="number" min="1" value="{{ $product->quantity }}" class="quantity-select">
                        </td>
                        <td class="subtotal">${{ $product->price * $product->quantity}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- <div class="cart-footer">
            <div>
                <button class="btn" type="button">Return To Shop</button>
            </div>
            <div>
                <button class="btn btn-update" type="button">Update Cart</button>
            </div>
        </div> -->

        <div class="cart-footer" style="margin-top:40px; gap:40px; flex-wrap: nowrap;">
            <div class="coupon-section" style="margin:0;">
                <input type="text" class="coupon-input" placeholder="Coupon Code" />
                <button class="btn-apply" type="button">Apply Coupon</button>
            </div>

            <aside class="cart-total">
                <h3 id="cart-total-heading">Cart Total</h3>
                <div class="totals-row">
                    <span>Subtotal:</span>
                    <span>$1750</span>
                </div>
                <div class="totals-row">
                    <span>Shipping:</span>
                    <span>Free</span>
                </div>
                <div class="totals-row total">
                    <span>Total:</span>
                    <span>$1750</span>
                </div>
                <button class="btn-checkout" type="button">Proceeds to checkout</button>
            </aside>
        </div>
    </div>

    <!-- @include('shared.website.footer')
    <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script> -->
</body>

</html>