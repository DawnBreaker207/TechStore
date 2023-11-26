<?php
session_start();
ob_start();
require_once "models/pdo.php";
require_once "models/taikhoan.php";
require_once "models/danhmuc.php";



     if(isset($_SESSION['ma_vaitro'])&& $_SESSION['ma_vaitro']== 3){
        require_once "view/admin/ui_admin/header.php";
            if(isset($_GET['act'])){
                $act=$_GET['act'];
                switch($act){
                    case 'trangChu':
                        break;
                    case 'danhMuc':
                        if (isset($_GET['nd'])) {
                            switch ($_GET['nd']) {
                                case 'addDm':
                                        if($_SERVER['REQUEST_METHOD']== "POST"){
                                            $ten_dm=$_POST['tendm'];
                                            $ma_dm=$_POST['madm'];
                                            insert_danhmuc($ten_dm);
                                        } 
                                        else {
                                            require_once "view/admin/danhmuc/add.php";
                                        }
                                    break;
                                case'update':
                                    if(isset($_GET['ma_dm'])){
                                        $ma_dm=$_GET['ma_dm'];
                                        $loadOneDM=loadOne_danhmuc($ma_dm);
                                        require_once "view/admin/danhmuc/update.php";
                                    }
                                    if($_SERVER['REQUEST_METHOD']== "POST"){
                                        $ten_dm=$_POST['tendm'];
                                        $ma_dm=$_POST['madm'];
                                        update_danhmuc($ma_dm,$ten_dm);
                                        $loadallDm=loadAll_danhmuc();
                                        require_once "view/admin/danhmuc/list.php";
                                    }
                                    break;
                                case 'delete':
                                    if(isset($_GET['ma_dm'])){
                                        $ma_dm=$_GET['ma_dm'];
                                        delete_danhmuc($ma_dm);
                                    }
                                    break;
                                case 'view':
                                    $loadallDm=loadAll_danhmuc();
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
                                $ma_tk = $_POST['ma_tk'];
                                $user = $_POST['user'];
                                $pass = $_POST['pass'];
                                $email = $_POST['email'];
                                $dia_chi = $_POST['dia_chi'];
                                $sdt = $_POST['sdt'];
                                $ma_vaitro = $_POST['ma_vaitro'];
                                insert_taikhoan($ma_tk,$user, $pass, $email, $diachi, $sdt, $ma_vaitro);
                            } else {
                                require_once "view/admin/taikhoan/add.php";
                            }
                            break;
                        
                        case 'update':
                            if(isset($_GET['ma_tk'])){
                                $ma_tk= $_GET['ma_tk'];                             
                                $loadOneTK= loadOne_tk($ma_tk);
                                require_once "view/admin/taikhoan/update.php";
                                }
                                if($_SERVER['REQUEST_METHOD'] == "POST"){
                                    $ma_tk = $_POST['ma_tk'];
                                    $user = $_POST['user'];
                                    $pass = $_POST['pass'];
                                    $email = $_POST['email'];
                                    $dia_chi = $_POST['dia_chi'];            
                                    $sdt = $_POST['sdt'];
                                    $ma_vaitro = $_POST['ma_vaitro'];
                                    update_taikhoan($ma_tk, $user, $pass, $email, $diachi, $sdt, $ma_vaitro);
                                    $loalallTK = loadAll_tk();
                                    require_once "view/admin/taikhoan/list.php";
                                }
                                
                            break;

                        case 'delete':
                            if(isset($_GET['ma_tk'])){
                                $ma_tk = $_GET['ma_tk'];
                                delete_taikhoan($ma_tk);
                            }
                            break;
                        case 'view':
                                $loadall_tk = loadAll_tk();
                                require_once "view/admin/taikhoan/list.php";
                                break;
                    }
                
                } else {
                    $loadall_tk = loadAll_tk();
                    require_once "view/admin/taikhoan/list.php";
                }
                break;

                case 'binhluan':
                    if (isset($_GET['nd'])) {
                        switch ($_GET['nd']) {
                            case 'addBl':
                                if($_SERVER['REQUEST_METHOD'] == "POST"){                                   
                                    $ma_bl = $_POST['ma_bl'];
                                    $ma_tk = $_POST['ma_tk'];
                                    $ma_sp = $_POST['ma_sp'];
                                    $noidung = $_POST['noidung'];
                                    $xephang = $_POST['xephang'];
                                    insert_binhluan( $ma_bl, $ma_tk, $ma_sp, $noidung, $xephang);
                                }else{
                                    require_once "view/admin/binhluan/add.php";
                                }
                                    break;
                                    
                                case 'delete':
                                    if(isset($_GET['ma_bl'])){
                                        $ma_bl = $_GET['ma_bl'];
                                        delete_binhluan($ma_bl);
                                    }
                                    break;
                                case 'view':
                                    $loadallBl = loadAll_binhluan();
                                    require_once "view/admin/binhluan/list.php";
                                    break;
                            }
                        }else{
                            $loadallBl = loadAll_binhluan();
                            require_once "view/admin/binhluan/list.php";
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
            case 'sigin':
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $vaitro = checkInfo($user, $pass);
                    extract($vaitro);
                    if ($vaitro != null){
                        $_SESSION['ma_tk'] = $ma_tk;
                        $_SESSION['ma_vaitro'] = $ma_vaitro;
                        header("Location: index.php");
                        exit;
                    }else{
                        require_once("view/login.php");
                    }
                }
                else{
                    require_once("view/login.php");
                }
                break;
            case 'product':
                    require_once "view/user/sanpham/sanpham.php";
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
             case 'user':
                    require_once "view/user/account/account.php";
                break;
             case 'home':
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
        require_once "view/user/trangchu/home.php";
    }
    require_once "view/user/ui_view/footer.php";
}
