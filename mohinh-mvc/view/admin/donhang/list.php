
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
                <td>Tên khách hàng </td>
                <td>Ngày đặt </td>
                <td>Tổng tiền </td>
                <td>Trạng thái </td>
                <td>Phương thức thanh toán</td>
                <td>Tùy chỉnh</td>
            </tr>
            <?php foreach($loadallDH as $dh){
               extract($dh); 
            ?>
            <tr>           
                <td><?php echo $ma_dh; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $ngay_dat; ?></td>
                <td><?php echo $tong_tien; ?> </td>
                <td><?php echo $ma_trangthai; ?> </td>
                <td><?php echo $ma_pttt; ?> </td>
                <td><a href="index.php?act=donHang&nd=update&ma_dh=<?php echo $ma_dh; ?>" class="btn-sm">Sửa</a>
                    <a href="index.php?act=donhang&nd=delete&ma_dh=<?php echo $ma_dh; ?>" class="btn-sm">Xóa</a>
                </td>
            </tr>
            <?php }?>

        </table>
    </div>
</body>

</html>
   