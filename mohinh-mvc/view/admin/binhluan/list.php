
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
            extract($bl); ?>
            <tr>
                <td><?php echo $ma_bl; ?></td>
                <td><?php echo $ma_tk; ?> </td>
                <td><?php echo $ma_sp; ?> </td>
                <td><?php echo $noidung; ?></td>
                <td><?php echo $xephang; ?></td>

                <td>
                    <a onclick="return confirm('Bạn có muốn xóa không?');" href="index.php?act=binhLuan&nd=delete&ma_bl=<?php echo $ma_bl; ?>" class="btn-sm">Xóa</a>
                </td>

            </tr>
            <?php }?>
             
        </table>
    </div>
