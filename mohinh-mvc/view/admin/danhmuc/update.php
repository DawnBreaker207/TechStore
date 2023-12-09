<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../accset/css/admin2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<section class="add-admin">
    <div class="add-tt">
        <h1>Sửa danh mục</h1>
        <form action="index.php?act=danhMuc&nd=update" method="post" enctype="multipart/form-data" id="myForm">

            <?php foreach ($loadOneDM as $dm) {
                extract($dm)
                ?>
                <label for="madm">Mã danh mục:</label>
                <input type="text" id="madm" name="madm" value="<?php echo $ma_dm; ?>"><br>
                <span class="error" id="madmError"></span><br>

                <label for="tendm">Tên danh mục:</label>
                <input type="text" id="tendm" name="tendm" value="<?php echo $ten_dm; ?>"><br>
                <span class="error" id="tendmError"></span><br>

                <label for="img">Hình Ảnh:</label>
                <input type="file" id="img" name="img" value="<?php echo $img_dm; ?>"><br>
                <input type="hidden" name="oldimg" value="<?php echo $img_dm; ?>">

                <input type="submit" value="Cập nhật" name="them" class="them">
            <?php } ?>
        </form>
        <br>


        <a href="view/admin/danhmuc/list.php" class="link_dsdm">Danh sách danh mục</a>
    </div>
</section>
</body>

</html>