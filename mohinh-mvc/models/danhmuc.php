<?php
include "pdo.php";
    function insert_danhmuc($ten_dm){
       $sql = "INSERT INTO `danhmuc`(`ten_dm`) VALUES ('$ten_dm')";
       execute($sql);
    }

    function delete_danhmuc($ma_dm){
        $sql =  "DELETE FROM `danhmuc` WHERE ma_dm =".$ma_dm;
        execute($sql);
    }
    function update_danhmuc($ma_dm, $ten_dm){
        $sql = "UPDATE `danhmuc` SET `ten_dm`= '".$ten_dm."' WHERE `ma_dm` = ".$ma_dm;
        execute($sql);
    }

    function loadAll_danhmuc(){
        $sql = "SELECT * FROM `danhmuc`";
        $result = query($sql);
        return $result;
        
    }
    function loadOne_danhmuc($ma_dm){
        $sql = "SELECT * FROM `danhmuc` WHERE ma_dm = ".$ma_dm;
        $result = query_one($sql);
        return $result;
    }

    
?>