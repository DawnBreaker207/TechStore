<main class="wrapper">
        <div class="path">
            <span class="tag">Home</span>
            /
            <span class="tag">My Profile</span>
        </div>
        <div class="account">
            <div class="edit">
                <h2>Edit Your Profile</h2>
                <form action="index.php?act=user&nd=editProfile" method="POST">
                    <div class="name">
                        <div class="miniform">
                       <?php foreach($loadOneTK as $tk){
                        extract($tk);
                        ?>
                            <div class="miniform-group">
                                <label>Username</label> <br>
                                <input type="text" name="firstname" id="firstname" value="<?php echo $user ?>">
                            </div>
                            <div class="miniform-group">
                                <label>Phone Number</label><br>
                                <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $sdt ?>">
                            </div>                                   
                        </div>                      
                    </div>
                    <div class="name">
                        <div class="miniform">
                            <div class="miniform-group">
                                <label>Email</label> <br>
                                <input type="text" name="email" id="email" value="<?php echo $email ?>">
                            </div>
                            <div class="miniform-group">
                                <label>Address</label> <br>
                                <input type="text" name="address" id="address" value="<?php echo $dia_chi ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-account">
                        <label>Password Changes</label>
                        <input type="password" name="currentpassword" id="currentpassword" placeholder="Current Password" value="<?php echo $pass ?>">
                        <input type="password" name="newpassword" id="newpassword" placeholder="New Password">
                       
                    </div>
                    <div class="submit">
                        <button type="button">Cancel</button>
                        <button onclick="return confirm('Sửa tài khoản thành công');" type="submit" class="submit-account">Save Changes</button>
                    </div>
                </form>
            <?php } ?>
            </div>
        </div>
    </main>