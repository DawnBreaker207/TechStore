<?php
    session_start();
    include "models/pdo.php";
    include "models/taikhoan.php";
    include "models/danhmuc.php";

     include "view/user/ui_view/header.php";
     
    

    //  if (isset($_GET['act'])) {
    //     $act = $_GET['act'];
    //     switch ($act) {
    //         case 'trangchu':
    //             include "view/admin/thongke/thongke.php";
    //             break;
    //         case 'danhmuc':
    //             include "view/admin/danhmuc/list.php";
    //             break;
    //         case 'sanpham':
    //             include "view/admin/sanpham/list.php";
    //             break;
    //         case 'donhang':
    //             include "view/admin/donhang/list.php";
    //             break;
    //         case 'taikhoan':
    //              include "view/admin/taikhoan/list.php";
    //               break;
    //         case 'binhluan':
    //             include "view/admin/binhluan/list.php";
    //              break;  
    //     }
    // }
    // else{
    //     include "view/admin/thongke/thongke.php";
    // }
    if (isset($_GET['act'])){
        switch ($_GET['act']){
            case 'dangNhap':
                if (isset($_POST['dangnhap'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];

                    $taikhoan = dangnhap($user, $pass);

                    if (is_array($taikhoan)) {
                        $_SESSION['user'] = $user;
                        $_SESSION['ma_vaitro'] = $taikhoan['ma_vaitro'];
                    } else {
                        $thongbao = "Thông tin tài khoản sai";
                    }
                
                    include "view/user/trangchu/home.php";
                }
                break;
            case 'dangKy':

                break;
        }
    }else{
        require_once "view/login.php";
    }
    include "view/admin/ui_admin/footer.php";
    
    



?>