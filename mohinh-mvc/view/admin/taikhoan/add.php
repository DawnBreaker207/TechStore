
    <section class="add-admin">
        <div class="add-tt">
            <h1>Thêm Tài Khoản</h1>
            <form action="index.php?act=taiKhoan&nd=addTk" method="post" enctype="multipart/form-data">
                <label for="user"> User:</label>
                <input type="text" id="user" name="user"><br>

                <label for="pass">Pass:</label>
                <input type="password" id="pass" name="pass"><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>

                <label for="diachi">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi"><br>

                <label for="phone">Phone:</label>
                <input type="number" id="phone" name="phone"><br>

                <label for="tole">Vai trò :</label>
                <input type="number" id="role" name="role"><br>

                <input type="submit" value="Thêm" class="them">
            </form><br>
            <a href="index.php?act=taiKhoan&nd=view" class="link_dstk">Danh sách tài khoản</a>
        </div>
    </section>
