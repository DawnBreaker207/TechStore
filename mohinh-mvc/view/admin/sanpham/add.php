
    <section class="add-admin">
        <div class="add-tt">
            <h1>Thêm Sản Phẩm</h1>
            <form action="index.php?act=sanPham&nd=addSp" method="post" enctype="multipart/form-data"  >

            
                <label for="tensp">Tên sản phẩm:</label>
                <input type="text" id="tensp" name="tensp"><br>

                <label for="gia">Giá bán:</label>
                <input type="number" id="gia" name="gia"><br>


                <label for="soLuong">Số Lượng:</label>
                <input type="number" id="soLuong" name="soluong"><br>

                <label for="img">Hình Ảnh:</label>
                <input type="file" id="img" name="img"><br>

                <label for="mota">Mô Tả:</label>
                <input type="text" id="mota" name="mota"><br>

                <label for="hang">Hãng:</label>
                <select name="ma_nsx" id="">
                    <?php foreach ($loadAllNSX as $nsx) {
                        extract($nsx);
                        ?>
                <option value="<?php echo $ma_nsx;?>">
                <?php echo $ten_nsx;?></option>
                <?php }?>
                </select><br>

                <label for="ma_dm"> Danh Mục:</label>
                <select name="ma_dm" id="">
                    <?php foreach ($loadallDm as $dm) {
                        extract($dm);
                        ?>
                <option value="<?php echo $ma_dm;?>">
                <?php echo $ten_dm;?></option>
                <?php }?>
              
                </select>
                <input type="submit" value="Thêm" class="them">
            </form><br>
            <a href="index.php?act=sanPham&nd=view" class="link_dssp">Danh sách sản phẩm</a>
        </div>
    </section>
</body>

</html>