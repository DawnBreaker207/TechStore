<?php
include "pdo.php";
    function insert_danhmuc($ten_dm){
       $sql = "INSERT INTO `danhmuc`(`ten_dm`) VALUES ('?')";
       return getData($sql, [$ten_dm], false);
    }

    function delete_danhmuc($ma_dm){
        $sql =  "DELETE FROM `danhmuc` WHERE ma_dm = ?";
        return getData($sql, [$ma_dm], false);
    }
    function update_danhmuc($ma_dm, $ten_dm){
        $sql = "UPDATE `danhmuc` SET `ten_dm`= ? WHERE `ma_dm` = ?";
        return getData($sql, [$ma_dm, $ten_dm], false);
    }

    function loadAll_danhmuc(){
        $sql = "SELECT * FROM `danhmuc`";
       return getData($sql);
        
    }

    function loadOne_danhmuc($ma_dm){
        $sql = "SELECT * FROM `danhmuc` WHERE ma_dm = ?";
       return getData($sql,[$ma_dm]);
    }
    
    
?>