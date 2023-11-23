<?php
    function loadAll_tk(){
        $sql = "SELECT * FROM `taikhoan`";
        $result = query($sql);
        return $result;
    }  
    function loadOne_tk($ma_tk){
        $sql = "SELECT * FROM `taikhoan` WHERE 'ma_tk' = '$ma_tk'"; 
        $result = query_one($sql);
        return $result;
    }
   
    function insert_taikhoan($ma_tk, $user, $pass, $email, $diachi, $sdt, $ma_vaitro){       
        $sql = "INSERT INTO `taikhoan` ( `user`, `pass`, `email`, `diachi`, ``sdt`, `ma_vaitro`) VALUES ('$user','$pass','$email','$diachi','$sdt','$ma_vaitro')";
        execute ($sql);
    }
    function insert_vaitro($ma_vaitro, $vai_tro){
        $sql = "INSERT INTO `vaitro`( `ma_vaitro`, `vaitro`) VALUES ('$ma_vaitro','$vai_tro')";
        execute ($sql,[$ma_vaitro, $vai_tro]);
    }

    function update_taikhoan($ma_tk, $user, $pass, $email, $diachi, $sdt, $ma_vaitro){
        $sql = "UPDATE `taikhoan` SET `user`='$user',`pass`='$pass',`email`='$email',`dia_chi`='$diachi',`sdt`='$sdt',`ma_vaitro`='$ma_vaitro' WHERE `ma_tk` = '$ma_tk'";
        execute($sql);
    }
    function delete_taikhoan($ma_tk){
        $sql = "DELETE FROM `taikhoan` WHERE `ma_tk` = '$ma_tk'";
        execute($sql);
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