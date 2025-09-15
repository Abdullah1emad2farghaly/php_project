<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/assets/css/cart.css">
<title>Shopping Cart</title>
</head>
<body>
  <div class="cart-container">
    <table>
      <thead>
        <tr>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="product-info">
              <button class="remove-btn" type="button">×</button>
              <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/0892fa90-4844-4877-9b62-5a8349ec7b0c.png" alt="LCD Monitor black screen with stand on white background" width="70" height="50" />
              <span class="product-text">LCD Monitor</span>
            </div>
          </td>
          <td class="price">$650</td>
          <td>
            <select class="quantity-select">
              <option value="1" selected>01</option>
              <option value="2">02</option>
              <option value="3">03</option>
              <option value="4">04</option>
              <option value="5">05</option>
            </select>
          </td>
          <td class="subtotal" >$650</td>
        </tr>
        <tr>
          <td>
            <div class="product-info">
              <button class="remove-btn" type="button">×</button>
              <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1750079d-2d34-4cab-a9d3-250fa548cf47.png" alt="Red gaming controller with black details on white background" width="70" height="50" />
              <span class="product-text">HI Gamepad</span>
            </div>
          </td>
          <td class="price">$550</td>
          <td>
            <select class="quantity-select">
              <option value="1">01</option>
              <option value="2" selected>02</option>
              <option value="3">03</option>
              <option value="4">04</option>
              <option value="5">05</option>
            </select>
          </td>
          <td class="subtotal">$1100</td>
        </tr>
      </tbody>
    </table>

    <div class="cart-footer">
      <div>
        <button class="btn" type="button">Return To Shop</button>
      </div>
      <div>
        <button class="btn btn-update" type="button">Update Cart</button>
      </div>
    </div>

    <div class="cart-footer" style="margin-top:40px; gap:40px; flex-wrap: nowrap;">
      <div class="coupon-section" style="margin:0;">
        <input type="text" class="coupon-input" placeholder="Coupon Code"/>
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
</body>
</html>
