
    <section class="add-admin">
        <div class="add-tt">
            <h1>Sửa Sản Phẩm</h1>
            <form action="index.php?act=sanPham&nd=update" method="post" enctype="multipart/form-data">
                <?php foreach($loadOneSp as $sp){
                    extract($sp)
                 ?>
                <input type="hidden" id="tensp" name="masp" value="<?php $ma_sp;?>"><br>
                <label for="tensp">Tên sản phẩm:</label>
                <input type="text" id="tensp" name="tensp" value="<?php $ten_sp;?>"><br>

                <label for="gia">Giá bán:</label>
                <input type="number" id="gia" name="gia" value="<?php $gia;?>"><br>


                <label for="soLuong">Số Lượng:</label>
                <input type="number" id="soLuong" name="soluong" value="<?php $soluong;?>"><br>

                <label for="hinhanh">Hình Ảnh:</label>
                <input type="file" id="hinhanh" name="hinhanh" value="<?php $img;?>"><br>

                <label for="mota">Mô Tả:</label>
                <input type="text" id="mota" name="mota"><br>

                <label for="hang">Hãng:</label>
                <input type="text" id="hang" name="hang"><br>

                <label for="ma_dm"> Danh Mục:</label>
                <select name="ma_dm" id="">
                    <?php foreach ($loadallDm as $dm) {?>
                <option value="<?php echo $dm['id_danh_muc']?>"><?php echo $dm['ten_danh_muc']?></option>
                <?php } ?>
                </select>
                <input type="submit" value="Cập nhật" class="them">
                <?php } ?>
            </form><br>
            <a href="view/admin/sanpham/list.php" class="link_dssp">Danh sách sản phẩm</a>
        </div>
    </section>
