
<?php
    

    function insert_donhang($ma_tk,$name,$sdt,$email,$diachi,$ghichu, $tong_tien, $ma_trangthai, $ma_pttt){
        
         
            $sql = "INSERT INTO donhang (ma_tk, name, sdt, email, diachi, ghichu, tong_tien, ma_trangthai, ma_pttt)
                     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
             $conn = connect();
             $stmt = $conn->prepare($sql);
             $result = $stmt->execute([$ma_tk, $name, $sdt, $email, $diachi, $ghichu, $tong_tien, $ma_trangthai, $ma_pttt]);
         
             // Return the last inserted ID
             if ($result) {
                 return $conn->lastInsertId();
             } else {
                 // Handle the case where the insertion was not successful
                 return false;
             }
    }
    // insert_donhang(0,'Nguyễn Xuân Huy',987654321,'huynx15@fpt.edu.vn','Hà Nội','hàng dễ vỡ',400000,1,3);
    function insert_ctdh($ma_dh,$ma_sp,$soluong,$gia,$thanhtien){
        $sql="INSERT INTO chitietdonhang(ma_dh, ma_sp, soluong, dongia, thanhtien) VALUES (?,?,?,?,?)";
        return getData($sql,[$ma_dh,$ma_sp,$soluong,$gia,$thanhtien], false);
    }
    // insert_ctdh(1,22,2,50000,);
    function delete_donhang($ma_dh){
        $sql =  "DELETE FROM donhang WHERE ma_dh = ?";
        return getData($sql,[$ma_dh], false);
    }

    function update_donhang($ma_dh,$ma_tk, $ngay_dat,$tong_tien,$ma_trangthai, $ma_pttt){
        $sql = "UPDATE donhang SET ma_dh = ? WHERE ma_dh= ?";
        return getData($sql,[$ma_tk, $ngay_dat,$tong_tien,$ma_trangthai, $ma_pttt, $ma_dh], false);

    }

    function loadOne_donhang($ma_dh){
        $sql = "SELECT * FROM donhang WHERE ma_dh = ?";
        return getData($sql,[$ma_dh]);
    }

    function loadAll_donhang(){
        $sql = "SELECT * FROM donhang";
        return getData($sql);
    }
    function updateDangGiao($ma_dh)
{

    $trangThaiMoi = 2;

    $sql = "UPDATE donhang SET ma_trangthai=? WHERE ma_dh=?";
    return getData($sql, [$trangThaiMoi, $ma_dh], false);
}
// Cập nhật trạng thái của đăng ký có ID $id thành "Đang giao" (giả sử 1 là trạng thái đang giao)
function updateDaGiao($ma_dh)
{

    $trangThaiMoi = 3;

    $sql = "UPDATE donhang SET ma_trangthai=? WHERE ma_dh=?";
    return getData($sql, [$trangThaiMoi, $ma_dh], false);
}
function updateHuy($ma_dh)
{

    $trangThaiMoi = 4;

    $sql = "UPDATE donhang SET ma_trangthai=? WHERE ma_dh=?";
    return getData($sql, [$trangThaiMoi, $ma_dh], false);
}
    
function getSearchdh( $txt)
{
    
    $keyword = '%' . $txt . '%'; // Thêm '%' ở đầu và cuối chuỗi tìm kiếm
    $sql = "SELECT * FROM `donhang`  WHERE `name` LIKE '$keyword' ";
    return getData($sql );
}

?>