
<?php

    function insert_donhang($ma_dh, $ma_tk, $ngay_dat, $tong_tien, $ma_trangthai, $ma_pttt){
        $sql = "INSERT INTO `donhang`(`ma_dh`, `ma_tk`, `ngay_dat`, `tong_tien`, `ma_trangthai`, `ma_pttt`) VALUES ('?','?','?','?','?','?') ";
        return getData($sql,[$ma_dh,$ma_tk,$ngay_dat ,$tong_tien,$ma_trangthai ,$ma_pttt], false);

    }

    function delete_donhang($ma_dh){
        $sql =  "DELETE FROM `donhang` WHERE ma_dh = ?";
        return getData($sql,[$ma_dh], false);
    }

    function update_donhang($ma_dh,$ma_tk, $ngay_dat,$tong_tien,$ma_trangthai, $ma_pttt){
        $sql = "UPDATE `donhang` SET ma_dh = ? WHERE ma_dh= ?";
        return getData($sql,[$ma_tk, $ngay_dat,$tong_tien,$ma_trangthai, $ma_pttt, $ma_dh], false);

    }

    function loadOne_donhang($ma_dh){
        $sql = "SELECT * FROM `donhang` WHERE `ma_dh` = ?";
        return getData($sql,[$ma_dh]);
    }

    function loadAll_donhang(){
        $sql = "SELECT * FROM `donhang`";
        return getData($sql);
    }
    

?>