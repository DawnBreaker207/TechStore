<?php
    function insert_binhluan($ma_bl, $ma_tk, $ma_sp, $noidung, $xephang){
        $sql = "INSERT INTO `binhluan`(`ma_tk`, `ma_sp`, `noidung`, `xephang`) VALUES ('?','?','?','?','?')";
        return getData($sql, [$ma_tk, $ma_sp, $noidung, $xephang, $ma_bl], false);
    }
    function delete_binhluan($ma_bl){
        $sql = "DELETE FROM `binhluan` WHERE `ma_bl` = ?";
        return getData($sql, [$ma_bl], false);
    }
    function loadAll_binhluan(){
        $sql = "SELECT * FROM `binhluan` WHERE `ma_bl` = ?";
        return getData($sql);
    }
?>