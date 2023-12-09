<main class="wrapper">
        <div class="path">
            <span class="tag">Home</span>
            /
            <span class="tag">My Profile</span>
        </div>
        <div class="account">
            <div class="edit">
                <h2>My Profile</h2>
                <form action="index.php?act=user&nd=myProfile" method="POST">
                    <div class="name">
                        <div class="miniform">
                            <?php foreach($loadOneTK as $tk){
                                extract($tk);
                             ?>
                            
                            <div class="miniform-group">
                                <label>Username</label> <br>
                                <input type="text" name="firstname" id="firstname" value="<?php echo $user ?>" disabled>
                            </div>
                            <div class="miniform-group">
                                <label>Phone Number</label><br>
                                <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $pass ?>" disabled>
                            </div>                                   
                        </div>                      
                    </div>
                    <div class="name">
                        <div class="miniform">
                            <div class="miniform-group">
                                <label>Email</label> <br>
                                <input type="text" name="email" id="email" value="<?php echo $email ?>" disabled>
                            </div>
                            <div class="miniform-group">
                                <label>Address</label> <br>
                                <input type="text" name="address" id="address" value="<?php echo $dia_chi ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-account">
                        <label>Password </label>
                        <input type="password" name="currentpassword" id="currentpassword" placeholder="Current Password" value="<?php echo $pass ?>" disabled>
                        
                       
                    </div>
                    <div class="submit">
                        
                       <a href="index.php?act=user&nd=editProfile" class="submit-account">EDIT PROFILE</a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </main>