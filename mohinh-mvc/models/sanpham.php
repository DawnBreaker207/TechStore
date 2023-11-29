<?php
    require_once "pdo.php";
        function insert_sanpham($ten_sp, $img, $gia,$soluong, $mota, $ma_nsx, $ma_dm){
        $sql = "INSERT INTO sanpham( ten_sp, img, gia,soluong, mota, ma_nsx, ma_dm) VALUES (?,?,?,?,?,?,?)";
        return getData($sql, [$ten_sp, $img, $gia,$soluong, $mota, $ma_nsx, $ma_dm], false);
    }
    // insert_sanpham('loc','fghjkl',100,'đẹp',3,3);
    // echo "<pre>";
    // print_r(loadAll_sanpham());
    // echo "</pre>";
    function delete_sanpham($ma_sp){
        $sql = "DELETE FROM sanpham WHERE ma_sp = ? ";
        return getData($sql, [$ma_sp], false);
    }


    function update_sanpham($ma_sp,$ten_sp, $img, $gia, $mota,$soluong, $ma_nsx, $ma_dm){
        $sql = "UPDATE sanpham SET ten_sp=?,img=?,gia=?,mota=?,soluong=?,ma_nsx=?,ma_dm=? WHERE ma_sp =?";
        return getData($sql, [$ten_sp, $img, $gia, $mota, $soluong, $ma_nsx, $ma_dm,$ma_sp], false);
    }
    // update_sanpham();

    function loadAll_sanpham(){
        $sql = "SELECT * FROM sanpham ";
        return getData($sql);
    }
    function loadOne_sanpham($ma_sp){
        $sql = "SELECT * FROM sanpham WHERE ma_sp = ?";
        return getData($sql, [$ma_sp]);
    }
    function loadAll_nsx(){
        $sql="SELECT * FROM nhasanxuat ";
        return getData($sql);
    }
?>


