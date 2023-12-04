<?php
  
    function insert_danhmuc($ten_dm,$img){
       $sql = "INSERT INTO  danhmuc (ten_dm,img) VALUES (?,?)";
       return getData($sql,[$ten_dm,$img], false);
    }

    function delete_danhmuc($ma_dm){
        $sql =  "DELETE FROM `danhmuc` WHERE ma_dm =?";
        return getData($sql,[$ma_dm], false);
    }

    function update_danhmuc($ma_dm, $ten_dm, $img){
        $sql = "UPDATE danhmuc SET ten_dm=?, img=? WHERE ma_dm=?";
        return getData($sql,[$ten_dm,$img,$ma_dm], false);


    }

    function loadAll_danhmuc(){
        $sql = "SELECT * FROM danhmuc ";
       return getData($sql);
        
    }
    function loadOne_danhmuc($ma_dm){
        $sql = "SELECT * FROM `danhmuc` WHERE ma_dm = ?";
       return getData($sql,[$ma_dm]);
    }
    function getSpByMadm($ma_dm)
{
    $sql = "SELECT * FROM sanpham join danhmuc on sanpham.ma_dm=danhmuc.ma_dm  WHERE sanpham.ma_dm=?";
    return getData($sql, [$ma_dm]);
}
    
?>