 <!-- trang dang ky -->
 <div class="container-frm">
    <img src="accset/img/about/shopping.png" alt="" width="550px" height="550px" class="signup_img">


    <div class="right-side">
      <h2 class="right-side_heading">Đăng ký</h2>
      <form action="index.php?act=signup" method="POST">
        <div class="form-group">
          <input type="text" id="username" name="username"  placeholder="Tên đăng nhập" required>
          <span></span>
        </div>
        <div class="form-group">
          <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="password" id="pass" name="pass" placeholder="Password" required>
        </div>
        <div class="form-group">
          <input type="password" id="repass" name="repass" placeholder="Repassword" required>
        </div>
        <div class="form-group mg-top">
          <button type="submit" class="btn-sigin">Đăng ký</button>
        </div>
        <div class="switch-signup ">
          <p>Bạn đã có tài khoản ? <a href="index.php?act=signin">Log in</a></p>

        </div>
      </form>
    </div>
  </div>