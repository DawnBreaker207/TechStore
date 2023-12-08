<main class="wrapper" >
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
                <form action="index.php?act=checkout" method="POST">
                <div class="form-group-ck">
                    <label>First Name<span class="required">*</span></label>
                    <input type="text" id="firstname" name="firstname" required>
                    <span></span>
                </div>
                <div class="form-group-ck">
                    <label>Delivery Address</label>
                    <input type="text" id="companyname" name="companyname">
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
                    <label>Note<span class="required">*</span></label>
                    <textarea name="note" id="" cols="60" rows="10"></textarea>
                    <span></span>
                </div>
                <div class="form-group-ck">
                    <input type="checkbox"> Save this information for faster check-out next time 
                </div>
            </div>
            <div class="checkout-cart">
                    <?php  foreach($cart as $sp) {
                        extract($sp);
                     ?>
                <div class="checkout-product">
                    
                    
                     <div class="product-checkout"><img src="<?php echo $img; ?>" width="60px" heigth="60px">
                     <p><?php echo $ten_sp; ?></p>
                   <p>X<?php echo $soluong; ?></p></div>
                    <div class="price"><span><?php echo number_format((int)$gia, 0, ",", ".") ?></span></div>
                </div>
                <?php  } ?>
               
                <div class="cart-info">
                    <span>Subtotal:</span>
                    <span><?php echo number_format((int)$_SESSION['resultTotal'], 0, ",", ".") ?></span>
                </div> 
                <hr>
                <div class="cart-info">
                    <span>Shipping:</span>
                    <span>Free</span>
                </div>
                <hr>
                <div class="cart-info">
                    <span>Total:</span>
                    <span><?php echo number_format((int)$_SESSION['resultTotal'], 0, ",", ".") ?></span>
                </div>
                <div class="cart-purchase">
                    <input type="radio" name="pttt" id="bank" value="3"><label for="">Bank</label>
                </div>
                <div class="cart-purchase">
                    <input type="radio" name="pttt" id="cash" value="4"><label for="">Cash on delivery</label>
                </div>
                <div class="coupon">
                    <input type="text" name="coupon" id="coupon" placeholder="Coupon Code">
                    <button type="submit" class="submit-btn">Apply Coupon</button>
                </div>
                <div class="order">
               
                    <button type="submit" class="submit-btn"> <a  href=""></a>Place Order</button>
                    </form>
                </div>
            </div>
        </div>
    </main>