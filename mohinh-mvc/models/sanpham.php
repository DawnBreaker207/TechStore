<?php
    
    function insert_sanpham($ten_sp, $img, $gia, $mota, $luotxem, $ma_nsx, $ma_dm){
        $sql = "INSERT INTO `sanpham`(`ma_sp`, `ten_sp`, `img`, `gia`, `mota`, `luotxem`, `ma_nsx`, `ma_dm`) VALUES ('?','?','?','?','?','?','?','?')";
        return getData($sql, [$ten_sp, $img, $gia, $mota, $luotxem, $ma_nsx, $ma_dm], false);
    }

    function delete_sanpham($ma_sp){
        $sql = "DELETE FROM `sanpham` WHERE `ma_sp` = ? ";
        return getData($sql, [$ma_sp], false);
    }


    function update_sanpham($ma_sp,$ten_sp, $img, $gia, $mota, $luotxem, $ma_nsx, $ma_dm){
        if($img!="")
        $sql = "UPDATE `sanpham` SET `ma_sp`='?',`ten_sp`='?',`img`='?',`gia`='?',`mota`='?',`luotxem`='?',`ma_nsx`='?',`ma_dm`='?' WHERE `ma_sp` ='?'";
        else
        $sql = "UPDATE `sanpham` SET `ma_sp`='?',`ten_sp`='?',`gia`='?',`mota`='?',`luotxem`='?',`ma_nsx`='?',`ma_dm`='?' WHERE `ma_sp` ='?'";
        return getData($sql, [$ma_sp, $ten_sp, $img, $gia, $mota, $luotxem, $ma_nsx, $ma_dm], false);
    }

    function loadAll_sanpham(){
        $sql = "SELECT * FROM `sanpham` ";
        return getData($sql);
    }
    function loadOne_sanpham($ma_sp){
        $sql = "SELECT * FROM `sanpham` WHERE `ma_sp` = ?";
        return getData($sql, [$ma_sp]);
    }
?>


