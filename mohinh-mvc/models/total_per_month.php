<?php
include 'pdo.php';


$query = "SELECT MONTH(ngay_dat) AS thang, SUM(tong_tien) AS tongDoanhThu, count(donhang.ma_dh) AS soluong FROM donhang GROUP BY thang ORDER BY thang asC";
//    $query = "SELECT * FROM sanpham WHERE 1 ORDER BY gia DESC LIMIT 0,4";
$data = getData($query);


header('Content-Type: application/json');
echo json_encode($data);
?>
