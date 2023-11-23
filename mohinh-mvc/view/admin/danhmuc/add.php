

<section class="add-admin">
        <div class="add-tt">
            <h1>Thêm Sản Phẩm</h1>
            <form action="index.php?act=danhMuc&nd=addDm" method="post" enctype="multipart/form-data">
                <label for="madm">Mã danh mục:</label>
                <input type="text" id="madm" name="madm"><br>

                <label for="tendm">Tên danh mục:</label>
                <input type="text" id="tendm" name="tendm"><br>

                <input type="submit" value="Thêm" class="them">
            </form><br>
            <a href="index.php?act=danhMuc&nd=view" class="link_dsdm">Danh sách danh mục</a>
        </div>
    </section>
