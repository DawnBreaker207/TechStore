<main class="wrapper">
        <div class="path">
            <span class="tag">Home</span>
            /
            <span class="tag">My Account</span>
        </div>
        <div class="account">
            <div class="manage">
                <h2>Manage My Account</h2>
                <div class="manage-link">
                    <a href="#">My Profile</a>
                    <a href="#">Address Book</a>
                    <a href="#">My Payment Options</a>
                </div>
                <h2>My Orders</h2>
                <div class="manage-link">
                    <a href="#">My Returns</a>
                    <a href="#">My Cancellations</a>
                </div>
                
            </div>
            <div class="edit">
                <h2>Edit Your Profile</h2>
                <form action="" method="">
                    <div class="name">
                        <div class="miniform">
                            <?php foreach ?>
                            <div class="miniform-group">
                                <label><?php echo  ?></label> <br>
                                <input type="text" name="firstname" id="firstname">
                            </div>
                            <div class="miniform-group">
                                <label>Phone Number</label><br>
                                <input type="text" name="phonenumber" id="phonenumber">
                            </div>                                   
                        </div>                      
                    </div>
                    <div class="name">
                        <div class="miniform">
                            <div class="miniform-group">
                                <label>Email</label> <br>
                                <input type="text" name="email" id="email">
                            </div>
                            <div class="miniform-group">
                                <label>Address</label> <br>
                                <input type="text" name="address" id="address">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-account">
                        <label>Password Changes</label>
                        <input type="password" name="currentpassword" id="currentpassword" placeholder="Current Password">
                        <input type="password" name="newpassword" id="newpassword" placeholder="New Password">
                        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                    </div>
                    <div class="submit">
                        <button type="button">Cancel</button>
                        <button type="submit" class="submit-account">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </main>