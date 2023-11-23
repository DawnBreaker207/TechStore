
<?php

    function insert_donhang($ma_dh, $ma_tk, $ngay_dat, $tong_tien, $ma_trangthai, $ma_pttt){
        $sql = "INSERT INTO `donhang`(`ma_dh`, `ma_tk`, `ngay_dat`, `tong_tien`, `ma_trangthai`, `ma_pttt`) VALUES ('?','?','?','?','?','?') ";
        return getData($sql,[$ma_dh,$ma_tk,$ngay_dat ,$tong_tien,$ma_trangthai ,$ma_pttt], false);

    }

    function loadAll_donhang(){
        $sql = "SELECT * FROM `donhang`";
        return getData($sql);
    }
    

?>