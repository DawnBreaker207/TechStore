<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="admin.js"></script>
</head>

<body>
    <section class="add-admin">
        <div class="add-tt">
            <h1>Thêm Sản Phẩm</h1>
            <form action="index.php?act=sach&nd=addS" method="post" enctype="multipart/form-data">
                <label for="tensp">Tên sản phẩm:</label>
                <input type="text" id="tensp" name="tensp"><br>

                <label for="gia">Giá bán:</label>
                <input type="text" id="gia" name="gia"><br>


                <label for="soLuong">Số Lượng:</label>
                <input type="text" id="soLuong" name="soLuong"><br>

                <label for="hinhanh">Hình Ảnh:</label>
                <input type="file" id="hinhanh" name="hinhanh"><br>

                <label for="mota">Mô Tả:</label>
                <input type="text" id="mota" name="mota"><br>

                <label for="hang">Hãng:</label>
                <input type="text" id="hang" name="hang"><br>

                <label for="iddm"> Danh Mục:</label>
                <select name="iddm" id="">
                    <!-- <?php foreach ($vlAllDM as $dm) {?>
                <option value="<?php echo $dm['id_danh_muc']?>"><?php echo $dm['ten_danh_muc']?></option>
                <?php } ?> -->
                </select>
                <input type="submit" value="Thêm" class="them">
            </form><br>
            <a href="sanpham.html" class="link_dssp">Danh sách sản phẩm</a>
        </div>
    </section>
</body>

</html>