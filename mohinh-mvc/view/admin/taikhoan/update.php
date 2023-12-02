<section class="add-admin">
    <div class="add-tt">
        <h1>Sửa Tài Khoản</h1>
        <form action="index.php?act=taiKhoan&nd=update" method="post" enctype="multipart/form-data" id="myForm">
            <?php
            foreach ($loadOneTK as $tk) {
                extract($tk);

                ?>
                <input type="hidden" id="user" name="ma_tk" value="<?php echo $ma_tk; ?>"><br>

                <label for="user"> User:</label>
                <input type="text" id="user" name="user" value="<?php echo $user; ?>"><br>
                <span class="error" id="userError"></span><br>

                <label for="pass">Pass:</label>
                <input type="password" id="pass" name="pass" value="<?php echo $pass; ?>"><br>
                <span class="error" id="passError"></span><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>
                <span class="error" id="emailError"> </span><br>

                <label for="diachi">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi" value="<?php echo $dia_chi; ?>"><br>
                <span class="error" id="diachiError"> </span><br>

                <label for="phone">Phone:</label>
                <input type="number" id="phone" name="phone" value="<?php echo $sdt; ?>"><br>
                <span class="error" id="phoneError"> </span><br>

                <label for="role">Vai trò :</label>
                <input type="number" id="role" name="role" value="<?php echo $ma_vaitro; ?>"><br>
                <span class="error" id="roleError"></span><br>

                <input type="submit" value="Cập nhật" class="them">
            <?php } ?>
        </form>
        <br>
        <a href="index.php?act=taiKhoan&nd=view" class="link_dstk">Danh sách tài khoản</a>
    </div>
</section>
