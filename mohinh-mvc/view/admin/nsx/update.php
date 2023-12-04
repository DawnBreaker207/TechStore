
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
        <form action="index.php?act=nsx&nd=update" method="post" enctype="multipart/form-data" >

            <?php foreach ($loadOneNsx as $list) {
                extract($list)
                ?>
                <label for="mansx">Mã nhà sản xuất:</label>
                <input type="text" id="mansx" name="mansx" value="<?php echo $ma_nsx; ?>"><br>
                <span class="error" id="mansxError"></span><br>

                <label for="tennsx">Tên nhà sản xuất:</label>
                <input type="text" id="tennsx" name="tennsx" value="<?php echo $ten_nsx; ?>"><br>
                <span class="error" id="tennsxError"></span><br>

                <label for="img">Hình Ảnh:</label>
                <input type="file" id="img" name="img" value="<?php echo $img; ?>"><br>
                <input type="hidden" name="oldimg" value="<?php echo $img; ?>">

                <input type="submit" value="Cập nhật" name="them" class="them">
            <?php } ?>
        </form>
        <br>


        <a href="view/admin/nsx/list.php" class="link_dsdm">Danh sách danh mục</a>
    </div>
</section>
</body>

</html>