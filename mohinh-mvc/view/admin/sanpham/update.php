<section class="add-admin">
    <div class="add-tt">
        <h1>Sửa Sản Phẩm</h1>
        <form action="index.php?act=sanPham&nd=update" method="post" enctype="multipart/form-data"  id="myForm">
            <?php foreach ($loadOneSp as $sp) {

                ?>
                <input type="hidden" id="tensp" name="masp" value="<?php echo $sp['ma_sp']; ?>"><br>
                <label for="tensp">Tên sản phẩm:</label>
                <input type="text" id="tensp" name="tensp" value="<?php echo $sp['ten_sp']; ?>"><br>

                <label for="gia">Giá bán:</label>
                <input type="number" id="gia" name="gia" value="<?php echo $sp['gia']; ?>"><br>


                <label for="soLuong">Số Lượng:</label>
                <input type="number" id="soLuong" name="soluong" value="<?php echo $sp['soluong']; ?>"><br>

                <label for="img">Hình Ảnh:</label>
                <input type="file" id="img" name="img" value="<?php echo $sp['img']; ?>"><br>
                <input type="hidden" name="oldimg" value="<?php echo $sp['img']; ?>">

                <label for="mota">Mô Tả:</label>
                <input type="text" id="mota" name="mota" value="<?php echo $sp['mota']; ?>"><br>

                <label for="hang">Hãng:</label>
                <select name="ma_nsx" id="">
                    <?php foreach ($loadAllNSX as $nsx) { ?>
                        <option value="<?php echo $nsx['ma_nsx'] ?>" <?php if ($nsx['ma_nsx'] === $sp['ma_nsx']) echo 'selected'; ?>>
                            <?php echo $nsx['ten_nsx'] ?>
                        </option>
                    <?php } ?>
                </select>

                <label for="ma_dm">Danh mục:</label>
                <select name="ma_dm" id="">
                    <?php foreach ($loadAllDm as $dm) { ?>
                        <option value="<?php echo $dm['ma_dm'] ?>" <?php if ($dm['ma_dm'] === $sp['ma_dm']) echo 'selected'; ?>>
                            <?php echo $dm['ten_dm'] ?>
                        </option>
                    <?php } ?>
                </select>
                <input type="submit" value="Cập nhật" class="them">

            <?php } ?>
        </form>
        <br>
        <a href="view/admin/sanpham/list.php" class="link_dssp">Danh sách sản phẩm</a>
    </div>
</section>
