<main class="main">
  <section class="signin">
    <div class="form-container">
      <div class="signin-container form-content">
        <div class="signin-header form-header">
          <h3 class="form-heading signin-heading">Đăng nhập</h3>
          <span class="form-caption sigin-caption">Không có tài khoản?<a href="index.php?act=signup"> Đăng ký</a></span>
          <!-- <div class="form-social signin-social">
            <div class="form-social-item sigin-social-item">
              <img src="././public/images/fb.png" alt="" />
            </div>
            <div class="form-social-item sigin-social-item">
              <img src="././public/images/google.png" alt="" />
            </div>
            <div class="form-social-item sigin-social-item">
              <img src="././public/images/twitter.png" alt="" />
            </div>
          </div>
          <h4 class="form-already signin-already">
            <span>hoặc đăng nhập với email</span>
          </h4> -->
        </div>

        <form action="index.php?act=signin" class="form signin-form" method="post" enctype="multipart/form-data">
          <div class="form-group signin-form-group">
            <label for="" class="form-label signin-form-label">Username</label>
            <input type="text" class="form-input signin-input" name="id_user" placeholder="Tên đăng nhập" required />
          </div>
          <div class="form-group signin-form-group">
            <label for="" class="form-label signin-form-label">Password</label>
            <input type="password" class="form-input signin-input" name="password" placeholder="Mật khẩu" required />
          </div>

          <div class="form-support signin-support">
            <div class="form-remember signin-remember">
              <input type="checkbox" id="remember" class="form-remember-input" />
              <label for="remember" class="form-remember-label">Nhớ tài khoản</label>
            </div>

            <a href="index.php?act=forgot_password" class="form-forgot">Quên mật khẩu?</a>
          </div>
          <button class="form-submit sigin-submit" name="btn_submit">Đăng nhập</button>
        </form>

        <?php
        if (isset($message) && ($message != "")) {
          echo "<h3 class='alert-text $alert'>$message</h3>";
        }
        ?>

      </div>
    </div>
  </section>
</main>