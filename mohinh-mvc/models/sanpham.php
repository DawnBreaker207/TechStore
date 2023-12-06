<?php

function insert_sanpham($ten_sp, $img, $gia, $soluong, $mota, $ma_nsx, $ma_dm)
{
    $sql = "INSERT INTO sanpham( ten_sp, img, gia,soluong, mota, ma_nsx, ma_dm) VALUES (?,?,?,?,?,?,?)";
    return getData($sql, [$ten_sp, $img, $gia, $soluong, $mota, $ma_nsx, $ma_dm], false);
}


function delete_sanpham($ma_sp)
{
    $sql = "DELETE FROM sanpham WHERE ma_sp = ? ";
    return getData($sql, [$ma_sp], false);
}


function update_sanpham($ma_sp, $ten_sp, $img, $gia, $mota, $soluong, $ma_nsx, $ma_dm)
{
    $sql = "UPDATE sanpham SET ten_sp=?,img=?,gia=?,mota=?,soluong=?,ma_nsx=?,ma_dm=? WHERE sanpham.ma_sp =?";
    return getData($sql, [$ten_sp, $img, $gia, $mota, $soluong, $ma_nsx, $ma_dm, $ma_sp], false);
}

// update_sanpham();

function loadAll_sanpham()
{
    $sql = "SELECT * FROM sanpham ";
    return getData($sql);
}

function loadOne_sanpham($ma_sp)
{
    $sql = "SELECT * FROM sanpham WHERE ma_sp = ?";
    return getData($sql, [$ma_sp]);
}



function best_sell_sanpham()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,4";
    return getData($sql);
}
function menu_sanpham()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,8";
    return getData($sql);
}

function getspbynsx($ma_nsx){
    $sql = "SELECT * FROM sanpham join nhasanxuat on sanpham.ma_nsx=nhasanxuat.ma_nsx  WHERE sanpham.ma_nsx=?";
    return getData($sql, [$ma_nsx]);
}
function getSearchsp( $txt)
{
    
    $keyword = '%' . $txt . '%'; // Thêm '%' ở đầu và cuối chuỗi tìm kiếm
    $sql = "SELECT * FROM `sanpham`  WHERE `ten_sp` LIKE '$keyword' ";
    return getData($sql );
}

?>


