
    <section class="add-admin">
        <div class="add-tt">
            <h1>Thêm Sản Phẩm</h1>
            <form action="index.php?act=sanPham&nd=addSp" method="post" enctype="multipart/form-data">
                <label for="tensp">Tên sản phẩm:</label>
                <input type="text" id="tensp" name="tensp"><br>

                <label for="gia">Giá bán:</label>
                <input type="text" id="gia" name="gia"><br>


                <label for="soLuong">Số Lượng:</label>
                <input type="text" id="soLuong" name="soLuong"><br>

                <label for="hinhanh">Hình Ảnh:</label>
                <input type="file" id="hinhanh" name="hinhanh"><br>

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
                <input type="submit" value="Thêm" class="them">
            </form><br>
            <a href="index.php?act=sanPham&nd=view" class="link_dssp">Danh sách sản phẩm</a>
        </div>
    </section>
</body>

</html>