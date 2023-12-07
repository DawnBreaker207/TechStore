<main class="wrapper">
    <?php foreach ($loadOneSp

    as $ctsp){

    ?>
    <div class="path">
        <span class="tag-product">Account</span>
        /
        <span class="tag-category">Gaming</span>
        /
        <span class="tag-detail"><?php echo $ctsp['ten_sp']; ?></span>
    </div>
    <section class="product-ctsp">


        <header class="product-image">

            <img src="<?php echo $ctsp['img']; ?>" alt="" class="product__img">


        </header>
        <div class="product-detail">

            <div class="detail-col">
                <h3 class="product__title"><?php echo $ctsp['ten_sp']; ?></h3>

                <span class="product__rate">
                            <img src="accset/icon/star.svg" alt="">
                            <img src="accset/icon/star.svg" alt="">
                            <img src="accset/icon/star.svg" alt="">
                            <img src="accset/icon/star.svg" alt="">
                            <img src="accset/icon/star_black.svg" alt="">

                        <span class="product-review">
                            (150 Reviews)
                        </span>
                        |
                        <span class="product__status">In Stock</span>
                    </span>
                <h4 class="product__price">
                    <span><?php echo number_format((int)$ctsp['gia'], 0, ",", ".")  ?><u>đ</u></span>
                </h4>
                <p class="product__desc">
                    <?php echo $ctsp['mota']; ?>
                </p>
            </div>
            <div class="detail-col">
                <div class="detail-function">


                    <div class="product-btn">
                        <div class="btn btn-minus" onclick="decrementValue()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="icon-m">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/>
                            </svg>

                        </div> 
                        <form action="index.php?act=addToCart" method="post" enctype="multipart/form-data">
                        <input type="number" name="soluong" id=""class="btn-quantity 1 " min = "1" value="1">
                        <div class="btn btn-add" onclick="incrementValue()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="icon-m">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                            </svg>
                        </div>
                    </div>
                    <a class="btn-buy" href="">
                        Buy Now
                    </a>
                   
                        <input type="hidden" name="masp" value="<?php echo $ctsp['ma_sp']; ?>">
                        <input type="hidden" name="tensp" value="<?php echo $ctsp['ten_sp']; ?>">
                        <input type="hidden" name="img" value="<?php echo $ctsp['img']; ?>">
                       
                        <input type="hidden" name="gia" value="<?php echo $ctsp['gia']; ?>">
                        <button class="btn-add-cart" type="submit" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="icon-m">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                        </svg>
                        </button>
                    </form>
                </div>
                <div class="product-deliver">
                    <div class="deliver-item free-deliver">
                        <div class="deliver__img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                 fill="none">
                                <g clip-path="url(#clip0_261_4843)">
                                    <path d="M11.6673 31.6667C13.5083 31.6667 15.0007 30.1743 15.0007 28.3333C15.0007 26.4924 13.5083 25 11.6673 25C9.82637 25 8.33398 26.4924 8.33398 28.3333C8.33398 30.1743 9.82637 31.6667 11.6673 31.6667Z"
                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M28.3333 31.6667C30.1743 31.6667 31.6667 30.1743 31.6667 28.3333C31.6667 26.4924 30.1743 25 28.3333 25C26.4924 25 25 26.4924 25 28.3333C25 30.1743 26.4924 31.6667 28.3333 31.6667Z"
                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M8.33398 28.3335H7.00065C5.89608 28.3335 5.00065 27.4381 5.00065 26.3335V21.6668M3.33398 8.3335H19.6673C20.7719 8.3335 21.6673 9.22893 21.6673 10.3335V28.3335M15.0007 28.3335H25.0007M31.6673 28.3335H33.0007C34.1052 28.3335 35.0007 27.4381 35.0007 26.3335V18.3335M35.0007 18.3335H21.6673M35.0007 18.3335L30.5833 10.9712C30.2218 10.3688 29.5708 10.0002 28.8683 10.0002H21.6673"
                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M8 28H6.66667C5.5621 28 4.66667 27.1046 4.66667 26V21.3333M3 8H19.3333C20.4379 8 21.3333 8.89543 21.3333 10V28M15 28H24.6667M32 28H32.6667C33.7712 28 34.6667 27.1046 34.6667 26V18M34.6667 18H21.3333M34.6667 18L30.2493 10.6377C29.8878 10.0353 29.2368 9.66667 28.5343 9.66667H21.3333"
                                          stroke="black" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M5 11.8182H11.6667" stroke="black" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M1.81836 15.4545H8.48503" stroke="black" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5 19.0909H11.6667" stroke="black" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_261_4843">
                                        <rect width="40" height="40" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="deliver-content">
                            <div class="deliver__title">Free Delivery</div>
                            <div class="deliver__desc"><a href="">Enter your postal code for Delivery Availability</a>
                            </div>

                        </div>
                    </div>
                    <div class="deliver-item  return-deliver">
                        <div class="deliver__img">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="icon-xm">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                            </svg>
                        </div>
                        <div class="deliver-content">
                            <div class="deliver__title">Return Delivery</div>
                            <div class="deliver__desc">Free 30 Days Delivery Returns. <a href="">Details</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>


    </section>
    <section class="relate">
        <header class="section-header">
            <div class="section-tag">
                <div class="section-block"></div>
                <p class="section-tag__title">Our Products</p>
            </div>
        </header>
        <div class="section-body">
            <div class="section-row">

                <?php foreach ($top_seller as $sp) {
                    extract($sp);
                    ?>
                    <div class="section-col">

                        <div class="product">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="index.php?act=ctsp&nd=ctsp&ma_sp=<?php echo $ma_sp; ?>">
                                        <img
                                                src="<?php echo $img; ?>"
                                                style="height: 250px; "
                                                alt=""
                                                class="product__img"
                                        />
                                    </a>
                                    <a href="" class="product-cart">Add to cart</a>
                                </div>
                                <div class="product-tab">
                                    <a class="product-item" href="#">
                                        <img src="accset/icon/heart.svg" alt=""/>
                                    </a>
                                    <a class="product-item" href="#">
                                        <img src="accset/icon/view.svg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="product-body">
                                <a href="">
                                    <h3 href="" class="product__title">
                                        <?php echo $ten_sp; ?>
                                    </h3>
                                </a>
                                <div class="product__price">
                                    <?php echo $gia; ?> VND<span class="product__sale">$1160</span>
                                </div>
                                <span class="product__rate">
                    <img src="accset/icon/star.svg" alt=""/>
                    <img src="accset/icon/star.svg" alt=""/>
                    <img src="accset/icon/star.svg" alt=""/>
                    <img src="accset/icon/star.svg" alt=""/>
                    <img src="accset/icon/half-star.svg" alt=""/>
                    <span class="product__total">(65)</span>
                  </span>
                            </div>
                        </div>

                        <!-- End .product -->
                    </div>
                <?php } ?>
                <!-- End .section-col -->
            </div>

        </div>
    </section>
    <section class="comment">
        <div class="comment-header">
            <h2 class="comment__heading">Comment</h2>
        </div>
        <div class="comment-body">
            <div class="comment-input">
                <div class="comment-rate">Bạn đánh giá sản phẩm này thế nào ?
                    <div class="comment-rating">
                        <img src="image/icon/star_black.svg" alt="">
                        <img src="image/icon/star_black.svg" alt="">
                        <img src="image/icon/star_black.svg" alt="">
                        <img src="image/icon/star_black.svg" alt="">
                        <img src="image/icon/star_black.svg" alt="">
                    </div>
                </div>
                <div>
                    <input type="text" class="comment__input" placeholder="Bạn cảm thấy sản phẩm này có tốt không ?">
                </div>
            </div>
            <div class="comment-customer">
                <div class="comment-image">
                    <img src="accset/img/brand/logo_amd.png" alt="">
                </div>
                <div class="comment-body">
                    <span class="comment-name">G2<span class="comment-date">vào ngày 20/10/2023</span></span>
                    <div class="comment-rating">
                        <img src="image/icon/star.svg" alt="">
                        <img src="image/icon/star.svg" alt="">
                        <img src="image/icon/star.svg" alt="">
                        <img src="image/icon/star.svg" alt="">
                        <img src="image/icon/star_black.svg" alt="">
                    </div>
                    <div class="comment-content">Sản phẩm ok</div>
                </div>
            </div>
        </div>

    </section>
</main>