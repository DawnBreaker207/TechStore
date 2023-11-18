<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../accset/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <section class="add-admin">
        <div class="add-tt">
            <h1>Sửa đơn hàng</h1>
            <form action="index.php?act=sach&nd=addS" method="post" enctype="multipart/form-data">
                <label for="user"> Tên tài khoản:</label>
                <input type="text" id="user" name="user"><br>

                <label for="namesp">Tên sản Phẩm:</label>
                <input type="text" id="namesp" name="namesp"><br>


                <label for="datenew">Ngày đặt:</label>
                <input type="date" id="datenew" name="datenew"><br>

                <label for="tongtien">Tổng tiền :</label>
                <input type="text" id="tongtien" name="tongtien"><br>

                <label for="trangthai">Trạng thái:</label>
                <input type="text" id="trangthai" name="trangthai"><br>

                <label for="pttt">Phương thức thanh toán:</label>
                <input type="text" id="pttt" name="pttt"><br>

                <input type="submit" value="Cập nhật" class="them">
            </form><br>
            <a href="donhang.html" class="link_dsdh">Danh sách đơn hàng</a>
        </div>
    </section>
</body>

</html>
   
