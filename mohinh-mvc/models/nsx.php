<?php
require_once "pdo.php";

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

function update_nsx($ma_nsx, $ten_nsx, $img)
{
    $sql = "UPDATE nhasanxuat SET ten_nsx=?, img=? WHERE ma_nsx=?";
    return getData($sql, [$ten_nsx, $img, $ma_nsx], false);


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



?>