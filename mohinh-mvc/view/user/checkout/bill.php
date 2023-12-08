<style>
    .cart-table-area {
        width: 1000px;
        margin: auto;
    }
    .container-fluid{
        margin: 50px 0;
    }
    .cart-summary {
        text-align: left;
        margin-top: 50px;
        margin-left: 50px;
        font-size: 18px;
    }
    .btn {
        background-color: yellow;
        color: black;
        font-size: 20px;
        font-weight: bold;
        margin-top: 14px;
    }
    .radio {
        font-size: 18px;
        margin-left: 18px;
    }
    .cart__title{
      
    }
    .bill-info{
       
        font-size: 17px ;
    }
    .radio label {
        margin-right: 8px;
    }

    table {
        width: 100%;
        text-align: center;
    }

    table img {
        width: 50px;
    }
    .bill-total{
        color: red;
        font-size: 20px;
        
    }
    .bill-item td{
       padding: 20px 0;
         }
</style>


<body>
<?php
    foreach($ttdh as $ttdh){
        extract($ttdh);
    
?>
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="checkout_details_area mt-50 clearfix">
                        <div class="cart-title">
                            <h1 class="cart__title">Thông tin đơn hàng </h1>
                        </div>
                        <div class="bill-info">
                            <h2>Thông tin khách hàng :</h2><br>
                            <p>Người đặt hàng : <?= $name; ?></p>
                            <p>Số điện thoại : <?= $sdt ?></p>
                            <p>Địa chỉ : <?= $diachi;?></p>
                            <p>Email : <?= $email; ?></p>
                            <p>Phương thức thanh toán : <?= $ma_pttt; ?></p>
                            <p>Ngày lập hóa đơn : <?= $ngay_dat; ?></p>
                        </div>

                    <?php } ?>

                    </div>
                    <div class="col-12 col-lg-12">
                        <table class="" border="1">
                            <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $tong = 0;
                                ?>
                                <?php foreach ($ctdh as $cart) : ?>
                                    <?php
                                    extract($cart);
                                    $tong=$tong_tien;
                                    ?>
                                    <tr class="bill-item">
                                        <td class="cart_product_img">
                                            <img src="<?= $img;?> " alt="">
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5><?= $ten_sp ?></h5>
                                        </td>
                                        <td class="price-bill">
                                            <span><?= number_format($dongia); ?><u>đ</u></span>
                                        </td>
                                        <td class="item-quantity">
                                            <span><?= $soluong; ?></span>
                                        </td>

                                    </tr>
                                    
                                   <?php
                                   
                                 endforeach; ?>

                                
                     

                            </tbody>
                        </table>
                        <p class="bill-total" >Tổng thanh toán : <?= number_format($tong ) ?> VND</p>
                                    </div>
                    </div>

                    <!-- <div class="col-12 col-lg-10">
                    <div class="cart-summary">
                        <h5>Tổng Thanh Toán : <?= number_format($tong) ?> đ</h5>
                        <h5>Miễn phí vận chuyển</h5>

                       
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    </div>
</body>