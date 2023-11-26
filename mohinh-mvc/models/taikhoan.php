<?php
// require_once "pdo.php";
    function loadAll_tk(){
        $sql = "SELECT * FROM `taikhoan`";
        return getData($sql);
    } 
    // echo "<pre>"; 
    // print_r(loadAll_tk());
    // echo "</pre>"; 
    function loadOne_tk($ma_tk){
        $sql = "SELECT * FROM taikhoan WHERE ma_tk = ?"; 
        return getData($sql, [$ma_tk]);
    }
    // insert_taikhoan(Null,'nbthu',123,null,null,null,1);
    function insert_taikhoan( $user, $pass, $email, $diachi, $sdt, $ma_vaitro){       
        $sql = "INSERT INTO taikhoan ( user, pass, email, dia_chi, sdt, ma_vaitro) VALUES ( ?, ?, ?, ?, ?, ?)";
        return getData($sql, [ $user, $pass, $email, $diachi, $sdt, $ma_vaitro], false);
    }
    

    function update_taikhoan($ma_tk, $user, $pass, $email, $diachi, $sdt, $ma_vaitro){
        $sql = "UPDATE taikhoan SET user=?,pass=?,email=?,dia_chi=?,sdt=?,ma_vaitro=? WHERE ma_tk = ?";
        return getData($sql,[$user, $pass, $email, $diachi, $sdt, $ma_vaitro,$ma_tk], false);
    }
    // update_taikhoan(20,'nbthu',12356,null,null,null,0);

    function delete_taikhoan($ma_tk){
        $sql = "DELETE FROM taikhoan WHERE ma_tk = ?";
        return getData($sql,[$ma_tk],false);
    }
    // delete_taikhoan(15);

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