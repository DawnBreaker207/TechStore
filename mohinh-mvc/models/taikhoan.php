<?php
    
    function loadAll_tk(){
        $sql = "SELECT * FROM `taikhoan`";
        $result = query($sql);
        return $result;
    }  
    function loadOne_tk($user,$pass){
        $sql = "SELECT * FROM `taikhoan` WHERE 'user' = '$user' , 'pass'='$pass'"; 
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

    function dangnhap($user,$pass) {
        $sql="SELECT * FROM `taikhoan` WHERE  user='$user' and pass='$pass'";
        $taikhoan =query_one($sql);
        return $taikhoan;
    }


?>