<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="/website/assets/css/checkout.css">
    <link rel="stylesheet" href="/website/assets/css/footer.css">
    <!-- <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>
    @include('shared.website.nav-link')
    <div class="container-check">
        <!-- Billing Detalis -->
        <div>
            <h2>Billing Detalis</h2>

            <form action="">
                <label>First Name*</label>
                <input type="text" name="name" required>

                <label>Company Name</label>
                <input type="text" name="companyName">

                <label>Street Address*</label>
                <input type="text" name="address" required>

                <label>Apartment, floor, etc. (optional)</label>
                <input type="text" name="apartment">

                <label>Town/City*</label>
                <input type="text" name="town/city">

                <label>Phone Number*</label>
                <input type="text" name="phone" required>

                <label>Email Address*</label>
                <input type="email" name="email" required>

                <div class="checkbox">
                    <input type="checkbox" id="save-info">
                    <label for="save-info">Save this information for faster check-out next time</label>
                </div>
            </form>
        </div>

        <!-- Order Summary -->

        <div>
            <div class="order-summary">
                <div class="order-item">
                    <i class="fa-solid fa-gamepad"></i>
                    <span>LCD Monitor</span>
                    <span>$650</span>
                </div>
                <div class="order-item">
                    <i class="fa-solid fa-tv"></i>
                    <span>H1 Gamepad</span>
                    <span>$1100</span>
                </div>
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span>$1750</span>
                </div>
                <div class="summary-row">
                    <span>Shipping:</span>
                    <span>Free</span>
                </div>
                <div class="summary-row-total">
                    <span>Total:</span>
                    <span>$1750</span>
                </div>

                <div class="payment-method">
                    <div class="icons">
                        <label>
                            <input class="input" type="radio" name="payment" value="bank"> Bank
                            <div class="payment-icons">
                                <img src="https://cdn-icons-png.flaticon.com/512/349/349221.png" width="20" alt="Visa">
                                <img src="https://cdn-icons-png.flaticon.com/512/349/349228.png" width="20"
                                    alt="Mastercard">
                                <img src="https://cdn-icons-png.flaticon.com/512/196/196566.png" width="20"
                                    alt="PayPal">
                                <img src="https://cdn-icons-png.flaticon.com/512/349/349230.png" width="20" alt="Amex">
                            </div>
                        </label>
                    </div>

                    <label>
                        <input type="radio" name="payment" value="cod" checked> Cash on Delivery
                    </label>
                </div>

                <div class="coupon">
                    <input type="text" placeholder="Coupon Code">
                    <button type="button">Apply Coupon</button>
                </div>

                <button class="btn" type="submit" style="width: 30%; margin-top: 15px;">Place Order</button>
            </div>
        </div>
    </div>


    @include("shared.website.footer")

    <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>