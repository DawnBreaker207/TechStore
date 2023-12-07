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
                                        <th>Số lượng mặt hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Tình trạng đơn hàng</th>
                                        <th>Tình trạng thanh toán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        <?php foreach($loadAllDHUser as $cart) { ?>
                                            <?php extract($cart) ;
                                                $ttdh=get_ttdh($ma_trangthai);
                                            //     extract($ttdh);
                                            //    echo  $ttdh['ten_trangthai'];
                                                // echo "<pre>";
                                                // var_dump($ttdh);
                                                // echo "</pre>";
                                                // $countsp=load_cart_count($bill['id']);
                                                $pttt=loadOne_pttt($ma_pttt)
                                                // $tttt = get_tttt($bill['bill_thanhtoan']);
                                            ?>
                                            <tr>
                                            <td><?= $ma_dh ;?></td>
                                            <td><?=$ngay_dat;?></td>
                                          
                                            <td><?=number_format($tong_tien) ?>$</td>
                                            <td><?= $ttdh?></td>
                                            
                                            </tr>
                                        <?php } ?>
                              
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
    </div>

    <!-- <script type="text/javascript">
        function selects(){
var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName('chk');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                }  
            }  
    </script> -->
    