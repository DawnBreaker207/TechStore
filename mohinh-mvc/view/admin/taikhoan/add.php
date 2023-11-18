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
            <h1>Thêm Tài Khoản</h1>
            <form action="index.php?act=sach&nd=addS" method="post" enctype="multipart/form-data">
                <label for="user"> User:</label>
                <input type="text" id="user" name="user"><br>

                <label for="pass">Pass:</label>
                <input type="text" id="pass" name="pass"><br>


                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>

                <label for="diachi">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi"><br>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone"><br>

                <label for="tole">Vai trò :</label>
                <input type="text" id="role" name="role"><br>

                <input type="submit" value="Thêm" class="them">
            </form><br>
            <a href="taikhoan.html" class="link_dstk">Danh sách tài khoản</a>
        </div>
    </section>
</body>

</html>