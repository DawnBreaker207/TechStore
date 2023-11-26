
    <section class="add-admin">
        <div class="add-tt">
            <h1>Sửa Tài Khoản</h1>
            <form action="index.php?act=taiKhoan&nd=update" method="post" enctype="multipart/form-data">
               <?php 
               foreach($loadOneTK as $tk){
                extract($tk);
              
                ?>
                 <input type="hidden" id="user" name="ma_tk" value="<?php echo $ma_tk; ?>"><br>
                <label for="user"> User:</label>
                <input type="text" id="user" name="user" value="<?php echo $user; ?>"><br>
                
                <label for="pass">Pass:</label>
                <input type="password" id="pass" name="pass" value="<?php echo $pass; ?>"><br>


                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br>

                <label for="diachi">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi" value="<?php echo $dia_chi; ?>"><br>

                <label for="phone">Phone:</label>
                <input type="number" id="phone" name="phone" value="<?php echo $sdt; ?>"><br>

                <label for="tole">Vai trò :</label>
                <input type="number" id="role" name="role" value="<?php echo $ma_vaitro; ?>"><br>

                <input type="submit" value="Cập nhật" class="them">
                <?php } ?>
            </form><br>
            <a href="index.php?act=taiKhoan&nd=view" class="link_dstk">Danh sách tài khoản</a>
        </div>
    </section>
