<?php

// Kết nối CSDL
include 'pdo.php'; // Đảm bảo rằng bạn có hàm kết nối CSDL trong tệp pdo.php

// Thực hiện truy vấn

    $query = "SELECT danhmuc.ten_dm as tendm,count(sanpham.ma_dm) as count_sp FROM sanpham INNER JOIN danhmuc ON sanpham.ma_dm=danhmuc.ma_dm GROUP BY danhmuc.ma_dm";
//    $query = "SELECT * FROM sanpham WHERE 1 ORDER BY gia DESC LIMIT 0,4";
    $data = getData($query);

header('Content-Type: application/json');
echo json_encode($data);
// Trả về dữ liệu dưới dạng JSON


?>