<main class="wrapper">

    <section class="category">
        <div class="path">
            <span class="tag-product"><a href="index.php?act=product">Product /</a></span>
            
            <span class="tag-category"><a href="">Cpu</a></span>
        </div>
        <header class="section-header">
            <div class="section-tag">
                <div class="section-block"></div>
                <p class="section-tag__title">Categories</p>
            </div>
            <div class="section-title">
                <h2 class="section__title">Browse By Category</h2>
                <div class="section-nav">
                    <div class="button-nav">
                        <img
                                src="accset/icon/arrow-left-black.svg"
                                alt=""
                                class="button__icon"
                        />
                    </div>
                    <div class="button-nav">
                        <img
                                src="accset/icon/arrow-right-black.svg"
                                alt=""
                                class="button__icon"
                        />
                    </div>
                </div>
            </div>
        </header>
        <div class="section-body">
            <div class="category-row">
                <?php foreach($loadallDm as $dm){
                    extract($dm);
                 ?>
                <div class="category-col">
                    <a href="index.php?act=product&nd=maDm&ma_dm=<?php echo $dm['ma_dm']; ?>" class="category-icon">
                        <img src="<?php echo $img_dm; ?>" alt="">
                        <div class="icon-name"><?php echo $ten_dm; ?></div>
                    </a>
                </div>
                <!--End .category-col-->
                <?php } ?>
                <!--End .category-col-->
            </div>
            </div>

            <!--    <hr/>-->
    </section>
    <!-- End .category -->
    <section class="product">
        <header class="section-header">
            <div class="section-tag">
                <div class="section-block"></div>
                <p class="section-tag__title">Our Products</p>
            </div>
            <div class="section-title">
                <h2 class="section__title">Explore Our Products</h2>
                <div class="section-nav">
                    <div class="link-nav">
                        Filter
                    </div>
                </div>
            </div>
        </header>
        <div class="section-body">
            <div class="section-row">

                         <?php foreach ($loadall_sp as $sp) {
                            extract($sp);
                                    // echo "<pre>";
                                    // var_dump($sp);
                                    // echo "</pre>";
                                   ?>
                <div class="section-col">

                    <div class="product">
                        <div class="product-header">
                            <div class="product-image">
                                <a href="index.php?act=ctsp&nd=ctsp&ma_sp=<?php echo  $ma_sp; ?>">
                                    <img
                                            src="<?php echo $img ; ?>"
                                            style="height: 250px; "
                                            alt=""
                                            class="product__img"
                                    />
                                </a>
                                <form action="index.php?act=addToCart" method="post" enctype="multipart/form-data" >
                                    <input type="hidden" name="masp" value="<?php echo $ma_sp; ?>">
                                    <input type="hidden" name="tensp" value="<?php echo $ten_sp; ?>">
                                    <input type="hidden" name="img" value="<?php echo $img;?>">
                                    <input type="hidden" name="soluong" value="1">
                                    <input type="hidden" name="gia" value="<?php echo $gia; ?>">
                                    <input class="product-cart"  type="submit" value="Add to cart">
                                    </form>

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
                                <?php echo $sp['ten_sp']; ?>
                                </h3>
                            </a>
                            <div class="product__price">
                              <?php echo number_format((int)$sp['gia'], 0, ",", "."); ?><u>đ</u>
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
        <div class="section-footer section-number">
            <div class="section-btn">
                <a href="" class="section__linkpage">1</a>
            </div>
            <div class="section-btn">
                <a href="" class="section__linkpage">2</a>
            </div>
            <div class="section-btn">
                <a href="" class="section__linkpage">3</a>
            </div>
            <div class="section-btn">
                <a href="" class="section__linkpage">4</a>
            </div>
            <div class="section-btn">
                <a href="" class="section__linkpage">5</a>
            </div>
            <div class="section-btn">
                <a href="" class="section__linkpage">
                    <img src="accset/icon/arrow-right-black.svg" class="icon-sm">
                </a>
            </div>
        </div>
    </section>
    <!--End .product-->

</main>