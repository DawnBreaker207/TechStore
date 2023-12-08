
<main class="wrapper">
    <div class="path">
      <span class="tag">Home</span>
      /
      <span class="tag">My Account</span>
    </div>
    <h1>CART</h1>
    <div class="cart">
      <table id="cart-table">
       
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tr>
          <?php $sum_total=0; ?>
        <?php foreach($_SESSION['mycart'] as $cart){
          // echo "<pre>";
          // print_r($_SESSION['mycart']);
          // echo "</pre>";
          extract($cart);
      
         
          
         ?>
          <td> <div class="cart-item"><a onclick="return confirm ('Bạn có đồng ý xóa hay không?'); "  href="index.php?act=deletecart&ma_sp=<?php echo $ma_sp; ?>" class="a-del"><svg width="16" height="16" viewBox="0 0 8 8" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 7L4 4M7 1L3.99943 4M3.99943 4L1 1M4 4L7 7" stroke="black" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            <div class="img_cart">
              <img src="<?php echo $img;?>" alt="<?php echo $img ;?>" srcset="" width="100px" height="100px">
              <p><?php echo $ten_sp;?></p>
            </div>
            </div>
          </td>
          <td width="50px"><?php  echo number_format((int)$gia , 0, "," , ".") ;?> <u>đ</u></td>
          <td width="100px">
            <form action="index.php?act=updateCart&ma_sp=<?php echo $ma_sp;?>" method="post">
            <input type="number" name="soluong" id="" min="1" class="ip_quantity" value="<?php echo $soluong;?>">
            <input type="submit" name="updatecart" value="Cập nhật">
          </form></td>
          <td width="100px"><?php  echo number_format((int)($gia*$soluong), 0, ",", ".") ;?><u>đ</u></td>
          <?php  $sum_total += (($gia*$soluong));
        // Lưu tổng giá trị vào sesion
        $_SESSION['resultTotal'] = $sum_total;
        ?>
        </tr>
        <?php }?>
      </table>
      
      
    </div>
    <div class="main">
      <div class="apply-coupon">
        <form action="" method="post">
          <input type="text" class="ip-text" placeholder="Coupon Code">
          <input type="submit" value="Apply Coupon" class="ip-submit">
        </form>
      </div>
      <div class="right-side">
        <div class="total">
          <div class="tb-total">
            <h3>Cart Total</h3>
            <?php 
           
              
               ?>
            <div class="your-order-bottom">
              <ul>
                <li class="your-order-shipping">Subtotal:</li>
                <li><?php echo number_format((int)$sum_total, 0, ",", ".")?><u>đ</u></li>
              </ul>
            </div>
            <hr>
            <div class="your-order-bottom">
              <ul>
                <li class="your-order-shipping">Shipping</li>
                <li>Free shipping</li>
              </ul>
            </div>
            <hr>
            <div class="your-order-total">
              <ul>
                <li class="order-total">Total</li>
                
                <li><?php echo number_format((int)$sum_total, 0, ",", ".")?><u>đ</u></li>
              </ul>
            </div>
         
          </div>
          <div class="link-checkout">
            <a href="index.php?act=checkout">Procees to checkout</a>
          </div>
        </div>

      </div>
    </div>
  </main>