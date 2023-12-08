<main class="wrapper">

    <section class="hero">
        <section class="category">


            <a href="index.php?act=product&nd=maDm&ma_dm=4">CPU<img src="accset/icon/dropdown-black.svg" alt="" /></a>


            <a href="index.php?act=product&nd=maDm&ma_dm=3">RAM<img src="accset/icon/dropdown-black.svg" alt="" /></a>


            <a href="index.php?act=product&nd=maDm&ma_dm=6">SSD<img src="accset/icon/dropdown-black.svg" alt="" /></a>


            <a href="index.php?act=product&nd=maDm&ma_dm=7">VGA<img src="accset/icon/dropdown-black.svg" alt="" /></a>


            <a href="index.php?act=product&nd=maDm&ma_dm=5">HDD<img src="accset/icon/dropdown-black.svg" alt="" /></a>


            <a href="">Memory<img src="accset/icon/dropdown-black.svg" alt="" /></a>


            <a href="">Display<img src="accset/icon/dropdown-black.svg" alt="" /></a>


            <a href="">Power<img src="accset/icon/dropdown-black.svg" alt="" /></a>


            <a href="">Others<img src="accset/icon/dropdown-black.svg" alt="" /></a>


        </section>
        <!-- End .category -->
        <hr class="hero-column" />
        <div class="hero-slider">
            <div class="hero-slide active-slide" style="background-image: url('accset/img/slide/slide_0.png'); width: 100%">
                <div class="slide-title">
                    <img src="image/slide/logo.png" alt="" />
                    <h1 class="hero__title">
                        Unlock Peak Performance Only With AMD
                        <span class="hero-link">
                            <a href="" class="product__link">Shop now</a>
                            <img src="accset/icon/arrow-right-white.svg" alt="" />
                        </span>
                    </h1>
                </div>
            </div>
            <!-- End .hero-slide -->
            <div class="hero-slide " style="background-image: url('accset/img/slide/slide_1.png'); width: 100%">

            </div>
            <!-- End .hero-slide -->
            <div class="hero-slide " style="background-image: url('accset/img/slide/slide_2.png'); width: 100%">

                <!-- End .hero-slide -->
            </div>
            <!-- End .hero-slide -->
            <div class="hero-slide " style="background-image: url('accset/img/slide/slide_3.png'); width: 100%">
                <!-- End .hero-slide -->
            </div>
            <!-- End .hero-slide -->
            <div class="hero-slide " style="background-image: url('accset/img/slide/slide_4.png'); width: 100%">
                <!-- End .hero-slide -->
            </div>
            <!-- End .hero-slide -->
    </section>
    <!-- End .hero -->

    <section class="brand">
        <!--    <hr/>-->
        <header class="section-header">
            <div class="section-tag">
                <div class="section-block"></div>
                <p class="section-tag__title">Categories</p>
            </div>
            <div class="section-title">
                <h2 class="section__title">Browse By Branding</h2>
                <div class="section-nav">
                    <div class="button-nav" id="slide-pre">
                        <img src="accset/icon/arrow-left-black.svg" alt="" class="button__icon" />
                    </div>
                    <div class="button-nav" id="slide-next">
                        <img src="accset/icon/arrow-right-black.svg" alt="" class="button__icon" />
                    </div>
                </div>
            </div>
        </header>
        <div class="section-body">
            <div class="section-body">
                <div class="brand-row snap-inline">
                    <?php foreach ($loadAllNSX as $nsx) {
                    ?>
                        <div class="brand-col">
                            <div class="brand-logo">

                                <a href="index.php?act=product&nd=nsx&ma_nsx=<?php echo $nsx['ma_nsx']; ?>">
                                    <img src="<?php echo $nsx['img_nsx']; ?>" alt="" class="brand__img" width="150px" height="150px" />
                                </a>

                            </div>
                            <!--End .brand-logo-->
                        </div>
                    <?php  }  ?>
                    <!--End .brand-col-->

                </div>
            </div>
        </div>
        <!--    <hr/>-->
    </section>
    <!-- End .brand -->

    <section class="best-sell">
        <header class="section-header">
            <div class="section-tag">
                <div class="section-block"></div>
                <p class="section-tag__title">This Month</p>
            </div>
            <div class="section-title">
                <h2 class="section__title">Best Selling Products</h2>
                <div class="section-nav">
                    <div class="section-button">
                        <a href="" class="section__button">View All</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="section-body">
            <div class="section-row">

                <?php foreach ($top_seller as $sp) {
                    extract($sp);
                ?>
                    <!-- form thông tin sp -->

                    <div class="section-col">

                        <div class="product">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="index.php?act=ctsp&ma_sp=<?php echo $ma_sp; ?>">
                                        <img src="<?php echo $img; ?>" style="height: 250px; " alt="" class="product__img" />
                                    </a>
                                    <form action="index.php?act=addToCart" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="masp" value="<?php echo $ma_sp; ?>">
                                        <input type="hidden" name="tensp" value="<?php echo $ten_sp; ?>">
                                        <input type="hidden" name="img" value="<?php echo $img; ?>">
                                        <input type="hidden" name="soluong" value="1">
                                        <input type="hidden" name="gia" value="<?php echo $gia; ?>">
                                        <input class="product-cart" type="submit" value="Add to cart">
                                    </form>
                                </div>

                            </div>
                            <div class="product-body">
                                <a href="">
                                    <h3 href="" class="product__title">
                                        <?php echo $ten_sp; ?>
                                    </h3>
                                </a>
                                <div class="product__price">
                                <span><?php echo number_format((int)$gia, 0, ",", ".")  ?><u>đ</u></span>
                                </div>
                                <span class="product__rate">
                                    <img src="accset/icon/star.svg" alt="" />
                                    <img src="accset/icon/star.svg" alt="" />
                                    <img src="accset/icon/star.svg" alt="" />
                                    <img src="accset/icon/star.svg" alt="" />
                                    <img src="accset/icon/half-star.svg" alt="" />
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
    <!-- End .best-sell -->

    <section class="sale">
        <div class="sale-row">
            <div class="sale-col">
                <div class="sale-tag">Categories</div>

                <h2 class="sale__title">Enhance Your Gaming Experience</h2>

                <div class="sale-count">
                    <div class="sale-count-title">
                        <span class="sale-count__number">23</span>
                        <span class="sale-count__time">Hours</span>
                    </div>
                    <!--  .sale-count-title       -->
                    <div class="sale-count-title">
                        <span class="sale-count__number">05</span>
                        <span class="sale-count__time">Days</span>
                    </div>
                    <!--  .sale-count-title       -->
                    <div class="sale-count-title">
                        <span class="sale-count__number">59</span>
                        <span class="sale-count__time">Minutes</span>
                    </div>
                    <!--  .sale-count-title       -->
                    <div class="sale-count-title">
                        <span class="sale-count__number">35</span>
                        <span class="sale-count__time">Seconds</span>
                    </div>
                    <!--  .sale-count-title       -->
                </div>
                <a href="" class="sale-btn">Buy Now!</a>

            </div>

            <div class="sale-image-wrapper">
            </div>

        </div>
    </section>
    <!-- End .sale-->

    <section class="product">
        <header class="section-header">
            <div class="section-tag">
                <div class="section-block"></div>
                <p class="section-tag__title">Our Products</p>
            </div>
            <div class="section-title">
                <h2 class="section__title">Explore Our Products</h2>
                <div class="section-nav">

                </div>
            </div>
        </header>
        <div class="section-body">
            <div class="section-row">

                <?php foreach ($product as $sp) {
                    extract($sp);
                ?>

                    <div class="section-col">

                        <div class="product">
                            <div class="product-header">
                                <div class="product-image">
                                    <a href="index.php?act=ctsp&nd=ctsp&ma_sp=<?php echo $ma_sp; ?>">
                                        <img src="<?php echo $img; ?>" style="height: 250px; " alt="" class="product__img" />
                                    </a>
                                    <form action="index.php?act=addToCart" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="masp" value="<?php echo $ma_sp; ?>">
                                        <input type="hidden" name="tensp" value="<?php echo $ten_sp; ?>">
                                        <input type="hidden" name="img" value="<?php echo $img; ?>">
                                        <input type="hidden" name="soluong" value="1">
                                        <input type="hidden" name="gia" value="<?php echo $gia; ?>">
                                        <input class="product-cart" type="submit" value="Add to cart">
                                    </form>
                                </div>


                            </div>
                            <div class="product-body">
                                <a href="">
                                    <h3 href="" class="product__title">
                                        <?php echo $ten_sp; ?>
                                    </h3>
                                </a>
                                <div class="product__price">
                                <span><?php echo number_format((int)$gia, 0, ",", ".")  ?><u>đ</u></span>
                                </div>
                                <span class="product__rate">
                                    <img src="accset/icon/star.svg" alt="" />
                                    <img src="accset/icon/star.svg" alt="" />
                                    <img src="accset/icon/star.svg" alt="" />
                                    <img src="accset/icon/star.svg" alt="" />
                                    <img src="accset/icon/half-star.svg" alt="" />
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
        <div class="section-footer">
            <div class="section-btn">
                <a href="index.php?act=product" class="section__link">View All Products</a>
            </div>
        </div>
    </section>
    <!--End .product-->

    <section class="new-product">
        <header class="section-header">
            <div class="section-tag">
                <div class="section-block"></div>
                <p class="section-tag__title">Featured</p>
            </div>
            <div class="section-title">
                <h2 class="section__title">New Arrival</h2>
                <div class="section-nav"></div>
            </div>
        </header>
        <div class="section-body">
            <div class="new-product-row">

                <div class="new-product-item item-1">
                    <div class="new-product-title">

                        <h3 class="new-product__title">RTX 3090</h3>
                        <p class="new-product__desc">
                            Black and White version of the RTX 3090 coming out on sale.
                        </p>
                        <div class="new-product-btn">
                        </div>
                        <a href="" class="new-product__link">Shop Now</a>
                    </div>
                </div>
                <div class="new-product-item item-2">
                    <div class="new-product-title">

                        <h3 class="new-product__title">Women’s Collections</h3>
                        <p class="new-product__desc">
                            Featured woman collections that give you another vibe.
                        </p>
                        <div class="new-product-btn">
                        </div>
                        <a href="" class="new-product__link">Shop Now</a>
                    </div>

                </div>
                <div class="new-product-item item-3">
                    <div class="new-product-title">

                        <h3 class="new-product__title">Speakers</h3>
                        <p class="new-product__desc">Amazon wireless speakers</p>
                        <div class="new-product-btn">
                            <a href="" class="new-product__link">Shop Now</a>
                        </div>
                    </div>

                </div>
                <div class="new-product-item item-4">
                    <div class="new-product-title">

                        <h3 class="new-product__title">Perfume</h3>
                        <p class="new-product__desc">GUCCI INTENSE OUD EDP</p>
                        <div class="new-product-btn">
                            <a href="" class="new-product__link">Shop Now</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--End .new-product -->

    <section class="service">
        <div class="service-row">
            <div class="service-col">
                <div class="service-image-wrapper">
                    <img src="accset/icon/service/service_logo.svg" alt="" class="service__image" />
                </div>
                <div class="service-title">
                    <h3 class="service__title">FREE AND FAST DELIVERY</h3>
                    <p class="service__desc">
                        Free delivery for all orders over $140
                    </p>
                </div>
            </div>
            <!--End .service-col-->
            <div class="service-col">
                <div class="service-image-wrapper">
                    <img src="accset/icon/service/service_logo_1.svg" alt="" class="service__image" />
                </div>
                <div class="service-title">
                    <h3 class="service__title">24/7 CUSTOMER SERVICE</h3>
                    <p class="service__desc">Friendly 24/7 customer support</p>
                </div>
            </div>
            <!--End .service-col-->
            <div class="service-col">
                <div class="service-image-wrapper">
                    <img src="accset/icon/service/service_logo_2.svg" alt="" class="service__image" />
                </div>
                <div class="service-title">
                    <h3 class="service__title">MONEY BACK GUARANTEE</h3>
                    <p class="service__desc">We return money within 30 days</p>
                </div>
            </div>
            <!--End .service-col-->
        </div>
    </section>
    <!--End .service-->


</main>
<!-- End main-->