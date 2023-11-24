<main class="wrapper">
        <div class="path">
            <span class="tag">Account</span>
            /
            <span class="tag">My Account</span>
            /
            <span class="tag">Product</span>
            /
            <span class="tag">View Cart</span>
            /
            <span class="tag">Checkout</span>
        </div>
        <div class="heading">
            <h2>Billing Details</h2>
        </div>
        <div class="checkout-info">
            <div class="checkout-form">
                <div class="form-group-ck">
                    <label>First Name<span class="required">*</span></label>
                    <input type="text" id="firstname" name="firstname" required>
                    <span></span>
                </div>
                <div class="form-group-ck">
                    <label>Company Name</label>
                    <input type="text" id="companyname" name="companyname">
                </div>
                <div class="form-group-ck">
                    <label>Street Address<span class="required">*</span></label>
                    <input type="text" id="streetaddress" name="streetaddress" required>
                    <span></span>
                </div>
                <div class="form-group-ck">
                    <label>Apartment, floor, etc. (optional)</label>
                    <input type="text" id="apartment" name="apartment">
                </div>
                <div class="form-group-ck">
                    <label>Town/City<span class="required">*</span></label>
                    <input type="text" id="towncity" name="towncity" required>
                    <span></span>
                </div>
                <div class="form-group-ck">
                    <label>Phone Number<span class="required">*</span></label>
                    <input type="text" id="phonenumber" name="phonenumber" required>
                    <span></span>
                </div>
                <div class="form-group-ck">
                    <label>Email Address<span class="required">*</span></label>
                    <input type="text" id="email" name="email" required>
                    <span></span>
                </div>
                <div class="form-group-ck">
                    <input type="checkbox"> Save this information for faster check-out next time 
                </div>
            </div>
            <div class="checkout-cart">
                <div class="product-checkout">
                    <div class="product-info">
                        <img src="images/controller.png">
                        <span>LCD Monitor</span>
                    </div>
                    <div class="price">$650</div>
                </div>
                <div class="product-checkout">
                    <div class="product-info">
                        <img src="images/screen.png">
                        <span>H1 Gamepad</span>
                    </div>
                    <div class="price">$1100</div>
                </div>
                <div class="cart-info">
                    <span>Subtotal:</span>
                    <span>$1750</span>
                </div>
                <hr>
                <div class="cart-info">
                    <span>Shipping:</span>
                    <span>Free</span>
                </div>
                <hr>
                <div class="cart-info">
                    <span>Total:</span>
                    <span>$1750</span>
                </div>
                <div class="cart-purchase">
                    <input type="radio" name="bank" id="bank"><label for="">Bank</label>
                </div>
                <div class="cart-purchase">
                    <input type="radio" name="cash" id="cash"><label for="">Cash on delivery</label>
                </div>
                <div class="coupon">
                    <input type="text" name="coupon" id="coupon" placeholder="Coupon Code">
                    <button type="submit">Apply Coupon</button>
                </div>
                <div class="order">
                    <button type="submit">Place Order</button>
                </div>
            </div>
        </div>
    </main>