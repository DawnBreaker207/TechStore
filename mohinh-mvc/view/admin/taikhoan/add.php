
    <section class="add-admin">
        <div class="add-tt">
            <h1>Thêm Tài Khoản</h1>
            <form action="index.php?act=taikhoan&nd=addTk" method="post" enctype="multipart/form-data">
                <label for="user"> User:</label>
                <input type="text" id="user" name="user"><br>

                <label for="pass">Pass:</label>
                <input type="text" id="pass" name="pass"><br>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email"><br>

                <label for="diachi">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi"><br>

                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone"><br>

                <label for="tole">Vai trò :</label>
                <input type="text" id="role" name="role"><br>

                <input type="submit" value="Thêm" class="them">
            </form><br>
            <a href="index.php?act=taikhoan&nd=view" class="link_dstk">Danh sách tài khoản</a>
        </div>
    </section>
</body>

</html>