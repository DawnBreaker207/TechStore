
    <main>
        <div class="form">
            <form action="" method="post" class="form-serch btn">
                <input type="search" class="input-search" placeholder="Tìm kiếm">
                <input type="submit" value="Gửi" class="btn-sm">
            </form>
            <a href="addSP.html" target="content" class="btn-add"><svg width="16" height="16" viewBox="0 0 20 20"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 15.8333L15.8333 10L18.3333 12.5L12.5 18.3333L10 15.8333Z" stroke="#FFFCFE"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M15 10.8334L13.75 4.58335L1.66666 1.66669L4.58332 13.75L10.8333 15L15 10.8334Z"
                        stroke="#FFFCFE" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1.66666 1.66669L7.98832 7.98835" stroke="#FFFCFE" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M9.16667 10.8333C10.0871 10.8333 10.8333 10.0871 10.8333 9.16667C10.8333 8.24619 10.0871 7.5 9.16667 7.5C8.24619 7.5 7.5 8.24619 7.5 9.16667C7.5 10.0871 8.24619 10.8333 9.16667 10.8333Z"
                        stroke="#FFFCFE" stroke-linecap="round" stroke-linejoin="round" />
                </svg>Thêm</a>
        </div> 

        <div>
            <table class="table" border="0">
                <tr>
                    <td>ID</td>
                    <td>Tên sản phẩm</td>                   
                    <td>Ảnh </td>
                    <td>Giá</td>
                    <td>Mô tả</td>
                    <td>Số lượng </td>
                    <td>Danh mục</td>
                    <td>Hãng</td>
                    <td>Tùy chỉnh</td>
                </tr>
                <?php foreach($loadallTk as $sp){

                extract($sp); ?>
                <tr>
                    <td>ID</td>
                    <td>VGA Asus ROG Strix RTX 4090 OC 24GB Gaming </td>
                    
                    <td><img src="accset/img/547953_9C2ST_8746_001_082_0000_Light-Gucci-Savoy-medium-duffle-bag 1.png"
                            class="img" alt="">
                    </td>
                    <td>6500000</td>
                    <td>VGA Asus ROG Strix RTX 4090 OC 24GB Gaming thiết kế nâng cấp với hiệu suất nhiệt đứng đầu biểu
                        đồ.

                        VGA Asus ROG Strix RTX 4090 OC 24GB Gaming mang đến một ý nghĩa hoàn toàn mới để hòa mình vào
                        dòng chảy. Từ trong ra ngoài, mọi yếu tố của thẻ đều mang lại cho không gian GPU khổng lồ để thở
                        thoải mái và đạt được hiệu suất cao nhất. Thời kỳ chưa được khai phá của kiến ​​trúc NVIDIA Ada
                        Lovelace là ở đây.</td>
                    <td>15 </td>
                    <td>Danh mục</td>
                    <td>Hãng</td>
                    <td><a href="updateSP.html" class="btn-sm">Sửa</a>
                        <a href="#" class="btn-sm">Xóa</a>
                    </td>
                </tr>
                <?php } ?>

            </table>
        </div>
    </main>
