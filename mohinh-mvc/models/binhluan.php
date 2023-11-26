<?php
require_once "pdo.php";
    function insert_binhluan($ma_bl, $ma_tk,$ma_sp, $noidung){
        $sql = "INSERT INTO binhluan (ma_bl,ma_tk, ma_sp, noidung ) VALUES (?,?,?,?)";
        return getData($sql, [$ma_bl,$ma_tk,$ma_sp , $noidung ], false);
    }
    // insert_binhluan(null,13,11,'ddedks');
    function delete_binhluan($ma_bl){
        $sql = "DELETE FROM binhluan WHERE ma_bl = ?";
        return getData($sql, [$ma_bl], false);
    }
    function loadAll_binhluan(){
        $sql = "SELECT * FROM binhluan ";
        return getData($sql);
    }
?>