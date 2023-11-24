<?php
    function loadAll_tk(){
        $sql = "SELECT * FROM `taikhoan`";
        return getData($sql);
    }  
    function loadOne_tk($ma_tk){
        $sql = "SELECT * FROM `taikhoan` WHERE 'ma_tk' = ?"; 
        return getData($sql, [$ma_tk]);
    }
   
    function insert_taikhoan($ma_tk, $user, $pass, $email, $diachi, $sdt, $ma_vaitro){       
        $sql = "INSERT INTO `taikhoan` ( `user`, `pass`, `email`, `diachi`, ``sdt`, `ma_vaitro`) VALUES ('?','?','?','?','?','?')";
        return getData($sql,[$ma_tk,$user, $pass, $email, $diachi, $sdt, $ma_vaitro], false);
    }

    function update_taikhoan($ma_tk, $user, $pass, $email, $diachi, $sdt, $ma_vaitro){
        $sql = "UPDATE `taikhoan` SET `user`='?',`pass`='?',`email`='?',`dia_chi`='?',`sdt`='?',`ma_vaitro`='?' WHERE `ma_tk` = '?'";
        return getData($sql,[$user, $pass, $email, $diachi, $sdt, $ma_vaitro,$ma_tk], false);
    }

    function delete_taikhoan($ma_tk){
        $sql = "DELETE FROM `taikhoan` WHERE `ma_tk` = '?'";
        return getData($sql,[$ma_tk],false);
    }

    function checkInfo($user,$pass)
    {
        $sql = "SELECT * FROM taikhoan WHERE user = ? AND pass = ?";
        $info = getData($sql, [$user,$pass]);
        if (count($info) > 0) {
            return $info[0];
        } else {
            return null;
        }
    }

?>