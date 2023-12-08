<div style="width: 1000px; margin: auto;" >
    <div class="container-fluid" style="margin: 50px 0" >

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ĐƠN HÀNG CỦA TÔI</h1>

    <!-- DataTales Example -->
        <div >
            <div >
            <table  >
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt</th>
                                        <th>Số lượng mặt hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Tình trạng đơn hàng</th>
                                        <th>Tình trạng thanh toán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($loadallDh as $tk){
                                        extract($tk);
                                        $spincart=getCountSp($ma_dh);
                                        $sl=sizeof($spincart);
                                     ?>
                                    <td><?php echo $ma_dh ?></td>
                                    <td><?php echo $ngay_dat ?></td>
                                    <td><?php echo $sl; ?></td>
                                    <td> <?php echo number_format((int)$tong_tien, 0, ",", ".")  ?><u>đ</u></td>
                                    <?php 
                                     if ($ma_trangthai == 3) {
                                            echo '<td class="red" style="color: green">Đã giao</td>';
                                        } else if ($ma_trangthai == 1) {
                                            echo '<td class="green" style="color: #9e9e0b">Đang duyệt</td>';
                                        } else if ($ma_trangthai == 2) {
                                            echo '<td class="green" style="color: blue">Đang giao</td>';
                                        } else {
                                            echo '<td class="yellow" style="color: red">Đã huỷ</td>';
                                        } ?>
                                    <td><?php
                                            if ($ma_trangthai == 4) { ?>

                                            <?php
                                            } else if ($ma_trangthai == 1) { ?>
                                                <a class="btn-sm" href="index.php?act=donhang&nd=status&tt=huy&ma_dh=<?php echo $ma_dh;?>">Huỷ</a>
                                                <a class="btn-sm"href="index.php?act=bill&ma_dh=<?= $ma_dh; ?>">Chi tiết</a>
                                            <?php
                                            }else {?>

                                    <a class="btn-sm" href="index.php?act=bill&ma_dh=<?= $ma_dh; ?>">Chi tiết</a>
                                          <?php  }
                                      ?></td>
                                    
                                       
                                            

                                            
                                            
                                       
                            
                                </tbody>
                                <?php } ?>
                            </table>
                            
            </div>
        </div>
    </div>
    </div>


    