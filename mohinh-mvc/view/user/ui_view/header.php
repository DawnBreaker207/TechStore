<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
    <!--Link CSS-->
    <link rel="stylesheet" href="accset/css/header.css">
    <link rel="stylesheet" href="accset/css/menu.css">
    <link rel="stylesheet" href="accset/css/list-product.css">
    <link rel="stylesheet" href="accset/css/detail.css">
    <link rel="stylesheet" href="accset/css/common.css">
    <link rel="stylesheet" href="accset/css/contact.css">
    <link rel="stylesheet" href="accset/css/about.css">
    <link rel="stylesheet" href="accset/css/footer.css">
    <link rel="stylesheet" href="accset/css/sigin.css">
    <link rel="stylesheet" href="accset/css/cart.css">
    <link rel="stylesheet" href="accset/css/account.css">
    <link rel="stylesheet" href="accset/css/checkout.css">
    <!--End Link CSS-->
    <!--    Normalize CSS-->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <!--    End Normalize CSS-->
    <!--Inter Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Noto+Sans:wght@500&family=Roboto&display=swap" rel="stylesheet" />
    <!--End Inter Font-->
    <!--Poppins Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Noto+Sans:wght@500&family=Poppins&family=Roboto&display=swap" rel="stylesheet" />
    <!--End Poppins Font-->
</head>

<body>
    <section class="header wrapper">
        <div class="header-row">
            <div class="header-col">
                <a href="index.php?act=home">
                    <img src="accset/icon/header/logo_header.svg" alt="" class="nav__img" />
                </a>
            </div>
            <div class="header-col">
                <ul class="header-list">
                    <li><a href="index.php?act=home" class="header__link">Home</a></li>
                    <li><a href="index.php?act=product" class="header__link">Product</a></li>
                    <li><a href="index.php?act=contact" class="header__link">Contact</a></li>
                    <li><a href="index.php?act=about" class="header__link">About</a></li>
                    <li><a href="index.php?act=signin" class="header__link">Sign Up</a></li>
                </ul>
            </div>  
            <div class="header-col">
                <div class="header-function">
                    <div class="header-search">
                        
                    <form action="index.php?act=product&nd=seach" method="post">
                        <input type="text" name="keyword" id="" placeholder="What are you looking for?" />
                        <img src="accset/icon/search.svg" alt="" class="cart__img" />
                    </form>
                    </div>
                    <div class="header-nav">
                        <div class="header-cart">
                            <a href="index.php?act=cart" class="header-cart__link">
                                <img src="accset/icon/cart.svg" alt="" class="cart__img " />
                                <span class="header-cart--notifi" id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                            </a>
                        </div>
                        <div class="header-user">
                       <?php if (isset($_SESSION['ma_vaitro']) && $_SESSION['ma_vaitro'] == 2){?>
                          <?php echo  '<div class="user-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="transparent" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-l user__account">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>';?>
                                   <?php }else{?>
                              <?php 
                                  echo '<a href="index.php?act=signin">
                                  <div class="user-block">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="transparent" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-l user__account">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                     </svg></a>';  
                                   }?>
                              <?php  
                              if (isset($_SESSION['ma_vaitro']) && $_SESSION['ma_vaitro'] == 2){
                        
                               echo ' <div class="user-option">
                                    <div class="option-item">
                                        <a href="index.php?act=user"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-lm">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg></a>
                                        <a href="index.php?act=user"><p>My Profile</p></a>
                                    </div>
                                    <div class="option-item">
                                        <a href="index.php?act=user"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-lm">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg></a>
                                        <a href="index.php?act=user"><p>Edit Profile</p></a>
                                    </div>
                                    <div class="option-item">
                                        <a href="index.php?act="><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-lm">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg></a>
                                        <a href="index.php?act=bill"><p>My Oder</p></a>
                                    </div>
                                    <div class="option-item">
                                        <a href="index.php?act=user">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="icon-lm">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                            </svg>
                                        </a>
                                        <a href="index.php?act=dangxuat"><p>Log Out</p></a>
                                    </div>
                                </div>';
                              } else {

                              }
                                 ?> 
                              
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <hr class="long">
    <!-- End .header -->