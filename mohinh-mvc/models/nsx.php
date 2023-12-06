<?php


function insert_nsx($ten_nsx, $img)
{
    $sql = "INSERT INTO  nhasanxuat (ten_nsx,img) VALUES (?,?)";
    return getData($sql, [$ten_nsx, $img], false);
}

function delete_nsx($ma_nsx)
{
    $sql = "DELETE FROM `nhasanxuat` WHERE ma_nsx =?";
    return getData($sql, [$ma_nsx], false);
}

function update_nsx($ma_nsx, $ten_nsx, $img_nsx)
{
    $sql = "UPDATE nhasanxuat SET ten_nsx=?, img_nsx=? WHERE ma_nsx=?";
    return getData($sql, [$ten_nsx, $img_nsx, $ma_nsx], false);


}

function loadAll_nsx()
{
    $sql = "SELECT * FROM nhasanxuat ";
    return getData($sql);
}

function loadOne_nsx($ma_nsx)
{
    $sql = "SELECT * FROM `nhasanxuat` WHERE ma_nsx = ?";
    return getData($sql, [$ma_nsx]);
}

function getSearchnsx( $txt)
{
    
    $keyword = '%' . $txt . '%'; // Thêm '%' ở đầu và cuối chuỗi tìm kiếm
    $sql = "SELECT * FROM `nhasanxuat`  WHERE `ten_nsx` LIKE '$keyword' ";
    return getData($sql );
}




?>