
    <main>
        <div class="form">
            <form action="index.php?act=sanPham&nd=seach" method="post" class="form-serch btn">
                <input type="search" name="keyword" class="input-search" placeholder="Tìm kiếm">
                <input type="submit" value="Gửi" class="btn-sm">
            </form>
            <a href="index.php?act=sanPham&nd=addSp" target="content" class="btn-add"><svg width="16" height="16" viewBox="0 0 20 20"
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
            <table class="table" border ="0">
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
                <?php foreach ($loadall_sp as $sp){
                extract($sp); ?>
                <tr>
                    <td><?php echo $ma_sp;  ?></td>
                    <td><?php echo $ten_sp; ?> </td>
                    
                    <td><img src="<?php echo $img; ?>"
                            class="img" alt="">
                    </td>
                    <td><?php echo $gia; ?></td>
                    <td><?php echo $mota; ?></td>
                    <td><?php echo $soluong; ?></td>
                    <td><?php echo $ma_dm; ?></td>
                    <td><?php echo $ma_nsx; ?></td>
                    <td><a onclick="return confirm('Bạn có muốn sửa không?');" href="index.php?act=sanPham&nd=update&ma_sp=<?php echo $ma_sp; ?>" class="btn-sm">Sửa</a>
                        <a onclick="return confirm('Bạn có muốn xóa không?');" href="index.php?act=sanPham&nd=delete&ma_sp=<?php echo $ma_sp; ?>" class="btn-sm">Xóa</a>
                    </td>
                </tr>
                <?php } ?>

            </table>
        </div>
    </main>
