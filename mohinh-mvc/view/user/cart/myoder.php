<div style="width: 80%; margin: 170px 0px;" class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ĐƠN HÀNG CỦA TÔI</h1>
    
    <!-- DataTales Example -->
    <div >
        <div >
            <div >
            <table   width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày đặt</th>
                                        <!-- <th>Số lượng mặt hàng</th> -->
                                        <th>Tổng tiền</th>
                                        <th>Tình trạng đơn hàng</th>
                                        <th>Tình trạng thanh toán</th>
                                        <th>Hủy</th>
                                        <th>Xem chi tiết đơn hàng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($loadallTK as $tk){
                                        extract($tk);
                                     ?>
                                    <td><?php echo $ma_dh ?></td>
                                    <td><?php echo $ngay_dat ?></td>
                                    <td> <?php echo number_format((int)$tong_tien, 0, ",", ".")  ?><u>đ</u></td>
                                    <td><?php  ?></td>
                                    <td><?php  ?></td>
                                    <td></td>
                                    <td></td>
                                       
                                            

                                            
                                            
                                       
                            
                                </tbody>
                                <?php } ?>
                            </table>
                            
            </div>
        </div>
    </div>
    </div>


    