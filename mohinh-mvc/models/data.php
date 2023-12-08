<?php

// Kết nối CSDL
include 'pdo.php'; // Đảm bảo rằng bạn có hàm kết nối CSDL trong tệp pdo.php

// Thực hiện truy vấn
function category()
{
    $query = "SELECT ten_dm, ma_dm FROM danhmuc";
//    $query = "SELECT * FROM sanpham WHERE 1 ORDER BY gia DESC LIMIT 0,4";
    $data = getData($query);
    return $data;
}

//function product()
//{
//    $query = "SELECT ten_sp, ma_dm FROM product";
//    $data_product = getData($query);
//    return $data_product;
//}
//
//$result = array(
//    'category' => category(),
//    'product' => product()
//);

header('Content-Type: application/json');
echo json_encode(category());
// Trả về dữ liệu dưới dạng JSON


?>