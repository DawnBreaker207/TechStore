<?php
  
    function insert_danhmuc($ten_dm,$img_dm){
       $sql = "INSERT INTO  danhmuc (ten_dm,img_dm) VALUES (?,?)";
       return getData($sql,[$ten_dm,$img_dm], false);
    }

    function delete_danhmuc($ma_dm){
        $sql =  "DELETE FROM `danhmuc` WHERE ma_dm =?";
        return getData($sql,[$ma_dm], false);
    }

    function update_danhmuc($ma_dm, $ten_dm, $img_dm){
        $sql = "UPDATE danhmuc SET ten_dm=?, img_dm=? WHERE ma_dm=?";
        return getData($sql,[$ten_dm,$img_dm,$ma_dm], false);


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

function getSearchdm( $txt)
{
    
    $keyword = '%' . $txt . '%'; // Thêm '%' ở đầu và cuối chuỗi tìm kiếm
    $sql = "SELECT * FROM `danhmuc`  WHERE `ten_dm` LIKE '$keyword' ";
    return getData($sql );
}
    
?>