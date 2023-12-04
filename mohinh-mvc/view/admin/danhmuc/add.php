

<section class="add-admin">
        <div class="add-tt">
            <h1>Thêm Sản Phẩm</h1>
            <form action="index.php?act=danhMuc&nd=addDm" method="post" enctype="multipart/form-data"  id="myForm" >
                <label for="madm">Mã danh mục:</label>
                <input type="text" id="madm" name="madm"><br>
                <span class="error" id="madmError"></span><br>

                <label for="tendm">Tên danh mục:</label>
                <input type="text" id="tendm" name="tendm"><br>
                <span class="error" id="tendmError"></span><br>

                <label for="img">Ảnh:</label>
                <input type="file" id="img" name="img"><br>
                <span class="error" id="imgError"></span><br>

                <input type="submit" value="Thêm" class="them">
            </form><br>
            <a href="index.php?act=danhMuc&nd=view" class="link_dsdm">Danh sách danh mục</a>
        </div>
    </section>
