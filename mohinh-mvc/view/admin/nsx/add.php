<section class="add-admin">
    <div class="add-tt">
        <h1>Thêm nhà sản xuất</h1>
        <form action="index.php?act=nsx&nd=addNsx" method="post" enctype="multipart/form-data" id="myForm"
        >
            <label for="mansx">Mã nhà sản xuất:</label>
            <input type="text" id="mansx" name="mansx"><br>
            <span class="error" id="mansxError"></span><br>

            <label for="tennsx">Tên nhà sản xuất:</label>
            <input type="text" id="tennsx" name="tennsx"><br>
            <span class="error" id="tennsxError"></span><br>

            <label for="img">Ảnh:</label>
            <input type="file" id="img" name="img"><br>
            <span class="error" id="imgError"></span><br>

            <input type="submit" value="Thêm" class="them">
        </form>
        <br>
        <a href="index.php?act=nsx&nd=view" class="link_dsdm">Danh sách nhà sản xuất</a>
    </div>
</section>

