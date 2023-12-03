<?php
session_start();
ob_start();
require_once "models/pdo.php";
require_once "models/taikhoan.php";
require_once "models/danhmuc.php";
require_once "models/sanpham.php";
require_once "models/binhluan.php";
require_once "models/donhang.php";

if(!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

//$top_seller= best_sell_sanpham();
if (isset($_SESSION['ma_vaitro']) && $_SESSION['ma_vaitro'] == 0) {

    require_once "view/admin/ui_admin/header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'trangChu':
                //Trang chủ đề biểu đồ được không ?
                include "view/admin/thongke/thongke.php";
                break;
            case 'danhMuc':
                if (isset($_GET['nd'])) {
                    switch ($_GET['nd']) {
                        case 'addDm':
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                $ten_dm = $_POST['tendm'];
                                $ma_dm = $_POST['madm'];
                                insert_danhmuc($ten_dm);
                            } else {
                                require_once "view/admin/danhmuc/add.php";
                            }
                            break;
                        case 'update':
                            if (isset($_GET['ma_dm'])) {
                                $ma_dm = $_GET['ma_dm'];
                                $loadOneDM = loadOne_danhmuc($ma_dm);
                                require_once "view/admin/danhmuc/update.php";
                            }
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                $ten_dm = $_POST['tendm'];
                                $ma_dm = $_POST['madm'];
                                update_danhmuc($ma_dm, $ten_dm);
                                $loadallDm = loadAll_danhmuc();
                                require_once "view/admin/danhmuc/list.php";
                            }
                            break;
                        case 'delete':
                            if (isset($_GET['ma_dm'])) {
                                $ma_dm = $_GET['ma_dm'];
                                delete_danhmuc($ma_dm);
                            }
                            break;
                        case 'view':
                            $loadallDm = loadAll_danhmuc();
                            require_once "view/admin/danhmuc/list.php";
                            break;
                    }
                } else {
                    $loadallDm = loadAll_danhmuc();
                    require_once "view/admin/danhmuc/list.php";
                }
                break;

            case 'taiKhoan':
                if (isset($_GET['nd'])) {
                    switch ($_GET['nd']) {
                        case 'addTk':
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $email = $_POST['email'];
                                $dia_chi = $_POST['diachi'];
                                $sdt = $_POST['phone'];
                                $ma_vaitro = $_POST['role'];
                                insert_taikhoan($user, $pass, $email, $dia_chi, $sdt, $ma_vaitro);
                                require_once "view/admin/taikhoan/add.php";
                            } else {
                                require_once "view/admin/taikhoan/add.php";
                            }
                            break;

                        case 'update':
                            if (isset($_GET['ma_tk'])) {
                                $ma_tk = $_GET['ma_tk'];
                                $loadOneTK = loadOne_tk($ma_tk);
                                require_once "view/admin/taikhoan/update.php";
                            }
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                $ma_tk = $_POST['ma_tk'];
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $email = $_POST['email'];
                                $dia_chi = $_POST['diachi'];
                                $sdt = $_POST['phone'];
                                $ma_vaitro = $_POST['role'];
                                update_taikhoan($ma_tk, $user, $pass, $email, $dia_chi, $sdt, $ma_vaitro);
                                $loalallTK = loadAll_tk();
                                require_once "view/admin/taikhoan/list.php";
                            }

                            break;

                        case 'delete':
                            if (isset($_GET['ma_tk'])) {
                                $ma_tk = $_GET['ma_tk'];
                                delete_taikhoan($ma_tk);
                                $loalallTK = loadAll_tk();
                                require_once "view/admin/taikhoan/list.php";
                            }
                            break;
                        case 'view':
                            $loalallTK = loadAll_tk();
                            require_once "view/admin/taikhoan/list.php";
                            break;
                    }
                } else {
                    $loalallTK = loadAll_tk();
                    require_once "view/admin/taikhoan/list.php";
                }
                break;

            case 'binhLuan':
                if (isset($_GET['nd'])) {
                    switch ($_GET['nd']) {
                        case 'addBl':
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                $ma_bl = $_POST['ma_bl'];
                                $ma_tk = $_POST['ma_tk'];
                                $ma_sp = $_POST['ma_sp'];
                                $noidung = $_POST['noidung'];
                                $xephang = $_POST['xephang'];
                                insert_binhluan($ma_bl, $ma_tk, $ma_sp, $noidung, $xephang);
                            } else {
                                require_once "view/admin/binhluan/add.php";
                            }
                            break;

                        case 'delete':
                            if (isset($_GET['ma_bl'])) {
                                $ma_bl = $_GET['ma_bl'];
                                delete_binhluan($ma_bl);
                                $loadallBl = loadAll_binhluan();
                                require_once "view/admin/binhluan/list.php";
                            }
                            break;
                        case 'view':
                            $loadallBl = loadAll_binhluan();
                            require_once "view/admin/binhluan/list.php";
                            break;
                    }
                } else {
                    $loadallBl = loadAll_binhluan();
                    require_once "view/admin/binhluan/list.php";
                }
                break;

            case 'sanPham':
                if (isset($_GET['nd'])) {
                    switch ($_GET['nd']) {
                        case 'addSp':
                            $loadallDm = loadAll_danhmuc();
                            $loadAllNSX = loadAll_nsx();
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                $ten_sp = $_POST['tensp'];
                                $img = img();
                                $gia = $_POST['gia'];
                                $soluong = $_POST['soluong'];
                                $mota = $_POST['mota'];
                                $ma_nsx = $_POST['ma_nsx'];
                                $ma_dm = $_POST['ma_dm'];
                                insert_sanpham($ten_sp, $img, $gia, $mota, $soluong, $ma_nsx, $ma_dm);
                            } else {
                                require_once "view/admin/sanpham/add.php";
                            }
                            break;
                        case 'update':
                            if (isset($_GET['ma_sp'])) {
                                $ma_sp = $_GET['ma_sp'];
                                $loadAllNSX=loadAll_nsx();
                                $loadAllDm=loadAll_danhmuc();
                                $loadOneSp = loadOne_sanpham($ma_sp);
                                require_once "view/admin/sanpham/update.php";
                            }
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                $ma_sp = $_POST['masp'];
                                $ten_sp = $_POST['tensp'];
                                $oldimg = $_POST['oldimg'];
                                $img=$oldimg;
                                if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                                    $img = img(); // kiểm tra nếu có ảnh mới thì lấy đường dẫn ảnh mới
                                }else {
                                    $img = $_POST['oldimg']; // Sử dụng đường dẫn ảnh cũ nếu không có ảnh mới
                                }
                                $gia = $_POST['gia'];
                                $soluong = $_POST['soluong'];
                                $mota = $_POST['mota'];
                                $ma_nsx = $_POST['ma_nsx'];
                                $ma_dm = $_POST['ma_dm'];
                                update_sanpham($ma_sp,$ten_sp, $img, $gia, $mota, $soluong,$ma_nsx,$ma_dm);
                                $loadall_sp =  loadAll_sanpham();
                                require_once "view/admin/sanpham/list.php";
                            }


                            break;

                        case 'delete':
                            if (isset($_GET['ma_sp'])) {
                                $ma_sp = $_GET['ma_sp'];
                                delete_sanpham($ma_sp);
                            }
                            $loadall_sp = loadAll_sanpham();
                            require_once "view/admin/sanpham/list.php";
                            break;

                        case 'view':
                            $loadall_sp = loadAll_sanpham();
                            require_once "view/admin/sanpham/list.php";
                            break;
                    }
                } else {
                    $loadall_sp = loadAll_sanpham();
                    require_once "view/admin/sanpham/list.php";
                }
                break;

            case 'donHang':
                if (isset($_GET['nd'])) {
                    switch ($_GET['nd']) {
                        case 'addBl':
                            // if($_SERVER['REQUEST_METHOD'] == "POST"){
                            //     $ma_dh = $_POST['ma_dh'];
                            //     $ma_tk = $_POST['ma_tk'];
                            //     $ngay_dat = $_POST['ngay_dat'];
                            //     $tong_tien = $_POST['tong_tien'];
                            //     $ma_trangthai = $_POST['ma_trangthai'];
                            //     $ma_pttt = $_POST['ma_pttt'];
                            //     insert_donhang($ma_tk, $ngay_dat, $tong_tien, $ma_trangthai, $ma_pttt);
                            //     require_once "view/admin/donhang/add.php";
                            // }else{
                            //      require_once "view/admin/donhang/add.php";
                            // }
                            break;

                        case 'update';
                            if (isset($_GET['ma_dh'])) {
                                $ma_dh = $_GET['ma_dh'];
                                $loadOneDH = loadOne_donhang($ma_dh);
                                require_once "view/admin/donhang/update.php";
                            }
                            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                $ma_dh = $_POST['ma_dh'];
                                $ma_tk = $_POST['ma_tk'];
                                $ngay_dat = $_POST['ngay_dat'];
                                $tong_tien = $_POST['tong_tien'];
                                $ma_trangthai = $_POST['ma_trangthai'];
                                $ma_pttt = $_POST['ma_pttt'];
                                update_donhang($ma_dh, $ma_tk, $ngay_dat, $tong_tien, $ma_trangthai, $ma_pttt);
                                $loadallDH = loadAll_donhang();
                                require_once "view/admin/donhang/list.php";
                            }

                            break;

                        case 'delete':
                            if (isset($_GET['ma_dh'])) {
                                $ma_dh = $_GET['ma_dh'];
                                delete_donhang($ma_dh);
                                $loalallDH = loadAll_donhang();
                                require_once "view/admin/donhang/list.php";
                            }
                            break;

                        case 'view':
                            break;
                            $loadallDH = loadAll_donhang();
                            require_once "view/admin/donhang/list.php";
                            break;
                    }
                } else {
                    $loadallDH = loadAll_donhang();
                    require_once "view/admin/donhang/list.php";
                }
                break;
            case 'dangxuat':
                unset($_SESSION['ma_vaitro']);
                unset($_SESSION['ma_tk']);
                header("Location: index.php");

                break;
        }
    } else {
        require_once "view/admin/thongke/thongke.php";
    }

    require_once "view/admin/ui_admin/footer.php";
} else {
    require_once "view/user/ui_view/header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'signin':
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $vaitro = checkInfo($user, $pass);
                    extract($vaitro);
                    if ($vaitro != null) {
                        $_SESSION['ma_tk'] = $ma_tk;
                        $_SESSION['ma_vaitro'] = $ma_vaitro;
                        header("Location: index.php");
                        exit;
                    } else {
                        require_once("view/login.php");
                    }
                } else {
                    require_once("view/login.php");
                }
                break;
            case 'signup':
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $user = $_POST['username'];                  
                    $pass = $_POST['pass']; 
                    $email = $_POST['email'];
                    $dia_chi = '';
                    $sdt = '';
                    $ma_vaitro = 2;
                   insert_taikhoan($user, $pass, $email, $dia_chi, $sdt, $ma_vaitro);
                   header("Location: index.php?act=signin");
                }
                require_once "view/user/dangky/dangky.php";
                break;
            
                
                case 'product':
                    if (isset($_GET['nd'])) {
                        switch ($_GET['nd']) {
                            case 'maDm':
                                if(isset($_GET['ma_dm'])){
                                $ma_dm = $_GET['ma_dm'];
                                $loadall_sp = getSpByMadm($ma_dm);
                                $loadall_dm = loadAll_danhmuc();
                                require_once "view/user/sanpham/sanpham.php";
                                }else{
                                    $loadall_sp = loadAll_sanpham();
                                $loadAllNSX=loadAll_nsx();
                                    $loadallDm=loadAll_danhmuc();
                                require_once "view/user/sanpham/sanpham.php";
                                }
                                break;
                            case 'nsx':
                                if(isset($_GET['ma_nsx'])){
                                    $ma_nsx = $_GET['ma_nsx'];
                                    $loadall_sp = getspbynsx($ma_nsx);
                                    $loadall_nsx = loadAll_nsx();
                                    require_once "view/user/sanpham/sanpham.php";
                                }else{
                                    $loadall_sp = loadAll_sanpham();
                                    $loadAllNSX=loadAll_nsx();
                                    $loadallDm=loadAll_danhmuc();
                                require_once "view/user/sanpham/sanpham.php";
                                }
                                break;
                            case 'seach':
                                if($_SERVER['REQUEST_METHOD']== "POST"){
                                   $keyword = $_POST['keyword']; 
                                  
                                   $loadall_sp = getsearch($keyword);
                                   require_once "view/user/sanpham/sanpham.php";
                                }
                            break;
                } 
                }else{
                    $loadall_sp = loadAll_sanpham();
                    $loadAllNSX=loadAll_nsx();
                    $loadallDm=loadAll_danhmuc();
                require_once "view/user/sanpham/sanpham.php";
            }
                    break;
            case 'ctsp':
                if (isset($_GET['ma_sp'])) {
                    $ma_sp = $_GET['ma_sp'];
                    $loadAllNSX=loadAll_nsx();
                     $loadallDm=loadAll_danhmuc();
                     $loadOneSp = loadOne_sanpham($ma_sp);
                     $loadall_sp = loadAll_sanpham();
                    require_once "view/user/ctsp/ctsp.php";
                }
                break;
            case 'contact':
                require_once "view/user/contact/contact.php";
                break;
            case 'about':
                require_once "view/user/about/about.php";
                break;
            case 'cart':
                require_once "view/user/cart/cart.php"; 
                break;
            case 'addToCart':
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $ma_sp = $_POST['masp'];
                        $ten_sp = $_POST['tensp'];
                        $img = $_POST['img'];
                        $gia = $_POST['gia'];
                        $soluong = $_POST['soluong'];
                        $tien = $soluong * $gia;
                        $giohang = [$ma_sp,$ten_sp,$img,$gia,$tien,$soluong];
                        if (isset($_SESSION['mycart'])) {
                            $cartItems = $_SESSION['mycart'];
                            $existingItemKey = null;
                            foreach ($cartItems as $key => $item) {
                                if ($item[0] == $ma_sp) {
                                    $existingItemKey = $key;
                                    break;
                                }
                            }
                        }  
                        if ($existingItemKey !== null) {
                            // Nếu sản phẩm đã tồn tại, tăng số lượng
                            $cartItems[$existingItemKey][4] += $tien; // Cập nhật tổng tiền
                            $cartItems[$existingItemKey][5]++; // Tăng số lượng
                        } else {
                            // Nếu sản phẩm chưa tồn tại, thêm mới sản phẩm vào giỏ hàng
                            array_push($cartItems, $giohang);
                        }  
                        $_SESSION['mycart'] = $cartItems;
                    }
                    require_once "view/user/cart/cart.php";
                break;
            case 'cart':
                    require_once "view/user/cart/cart.php";
                    break;  
            case 'checkout':
                require_once "view/user/checkout/checkout.php";
                break;   
            case 'user':
                require_once "view/user/account/account.php";
                break;
            case 'home':
                $loadAllNSX=loadAll_nsx();
                $loadall_sp = loadAll_sanpham();
                require_once "view/user/trangchu/home.php";
                break;
            case 'dangxuat':
                unset($_SESSION['ma_vaitro']);
                unset($_SESSION['ma_tk']);
                header("Location: index.php");
                header("Refresh:0");
                break;
        }
    } else {
        $loadAllNSX=loadAll_nsx();
        $loadall_sp = loadAll_sanpham();
        require_once "view/user/trangchu/home.php";
    }
    require_once "view/user/ui_view/footer.php";
}
