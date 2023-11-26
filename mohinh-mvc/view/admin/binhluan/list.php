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
    <div class="form">
        <form action="" method="post" class="form-serch">
            <input type="search" class="input-search" placeholder="Tìm kiếm">
            <input type="submit" value="Gửi" class="btn-sm">
        </form>

    </div>
    <div>
        <table class="table" border="0">
            <tr>
                <td>ID</td>
                <td>Tên người bình luận </td>
                <td>Tên sản phẩm </td>
                <td>Nội dung</td>
                <td>xếp hạng</td>
                <td>Tùy chỉnh</td>
            </tr>
            <?php foreach($loadallBl as $bl){
            extract($bl) ?>
            <tr>
                <td><?php echo $ma_bl; ?></td>
                <td><?php echo $ma_tk; ?> </td>
                <td><?php echo $ma_sp; ?> </td>
                <td><?php echo $noidung; ?></td>
                <td><?php echo $xephang; ?></td>

                <td>
                    <a href="index.php?act=binhLuan&nd=delete&ma_bl=<?php echo $ma_bl; ?>" class="btn-sm">Xóa</a>
                </td>

            </tr>
            <?php }?>
             
        </table>
    </div>
</body>

</html>