
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
                <?php
                if ($ma_trangthai == 3) {
                    echo '<td class="red" style="color: green">Đã giao</td>';
                   
                } else if ($ma_trangthai == 1) {
                    echo '<td class="green" style="color: #9e9e0b">Đang duyệt</td>';
                } else if ($ma_trangthai == 2) {
                    echo '<td class="green" style="color: blue">Đang giao</td>';
                } else {
                    echo '<td class="yellow" style="color: red">Đã huỷ</td>';
                }
                ?>

                <td>
                    <?php
                    if ($ma_trangthai == 4) { ?>

                    <?php
                    } else if ($ma_trangthai == 1) { ?>

                        <a class="btn-sm" href="index.php?act=donHang&nd=trangthai&tt=dangGiao&ma_dh=<?php echo $ma_dh;?>">Xác nhận</a>
                        <a class="btn-sm" href="index.php?act=donHang&nd=trangthai&tt=huy&ma_dh=<?php echo $ma_dh;?>">Huỷ</a>
                        <a class="btn-sm" href="index.php?act=donHang&nd=viewCtdh&ma_dh=<?php echo $ma_dh;?>">Chi tiết</a>

                    <?php
                    } else if ($ma_trangthai == 2) { ?>

                        <a class="btn-sm" href="index.php?act=donHang&nd=trangthai&tt=daGiao&ma_dh=<?php echo $ma_dh;?>">Đã giao</a>
                        <a class="btn-sm" href="index.php?act=donHang&nd=viewCtdh&ma_dh=<?php echo $ma_dh;?>">Chi tiết</a>
                    <?php
                    } else {
                    ?>
                    <a class="btn-sm" href="index.php?act=donHang&nd=viewCtdh&ma_dh=<?php echo $ma_dh;?>">Chi tiết</a>
                    <?php 
                    }
                    ?>
                </td>
               
            </tr>
            <?php }?>

        </table>
    </div>
</body>

</html>
   