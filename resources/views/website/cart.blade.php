<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/assets/css/cart.css">
    <link rel="stylesheet" href="/website/assets/css/footer.css">
    <link rel="stylesheet" href="website/assets/css/landing.css">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
    header {
        width: 100% !important;
        max-width: 100%;
        margin: 0;
        background-color: black;
    }

    header nav {
        max-width: 80%;
        margin-left: 10%;
    }
    </style>

    <!-- <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css"> -->
    <title>Shopping Cart</title>
</head>

<body>
    <header>
        @include('shared.website.nav-link')
    </header>
    <div class="cart-container">
        <form action="{{ route('cart.update') }}" method="POST">
            @csrf
            @method('PUT')
            <table class="mt-5">
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
                                <button class="remove-btn" form="delete-form-{{ $product->order_id }}"
                                    type="submit">×</button>
                                <img src="/storage/{{$product->img}}" alt="{{$product->name}}" width="70" height="50" />
                                <span class="product-text">{{$product->name}}</span>
                            </div>
                        </td>
                        <td class="price">${{ $product->price }}</td>
                        <td>
                            <input type="number" min="1" name="quantities[{{ $product->order_id }}]"
                                value="{{ $product->quantity }}" class="quantity-select">
                        </td>
                        <td class="subtotal">${{ $product->price * $product->quantity }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="cart-footer">
                <div>
                    <button class="btn1" type="button" onclick="window.location='{{ url('/') }}'">Return To
                        Shop</button>
                </div>
                <div>
                    <button class="btn1 btn-update" type="submit">Update Cart</button>
                </div>
            </div>
        </form>
        @foreach ($products as $product)
        <form action="{{ route('cart.destroy', $product->order_id) }}" method="POST"
            id="delete-form-{{ $product->order_id }}" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        @endforeach
        <aside class="cart-total">
            <h3 id="cart-total-heading">Cart Total</h3>
            <div class="totals-row">
                <span>Subtotal:</span>
                <span>${{ $total }}</span>
            </div>
            <div class="totals-row">
                <span>Shipping:</span>
                <span>Free</span>
            </div>
            <div class="totals-row total">
                <span>Total:</span>
                <span>${{ $total }}</span>
            </div>
            <button class="btn-checkout" type="button">Proceed to checkout</button>
        </aside>

    </div>
    </div>

    @include('shared.website.footer')
    <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>