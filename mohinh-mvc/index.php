<?php
     include "view/admin/ui_admin/header.php";
    
     if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'trangchu':
                include "view/admin/thongke/thongke.php";
                break;
            case 'danhmuc':
                include "view/admin/danhmuc/list.php";
                break;
            case 'sanpham':
                include "view/admin/sanpham/list.php";
                break;
            case 'donhang':
                include "view/admin/donhang/list.php";
                break;
            case 'taikhoan':
                 include "view/admin/taikhoan/list.php";
                  break;
            case 'binhluan':
                include "view/admin/binhluan/list.php";
                 break;  
        }
    }
    else{
        include "view/admin/thongke/thongke.php";
    }

    include "view/admin/ui_admin/footer.php";




?>