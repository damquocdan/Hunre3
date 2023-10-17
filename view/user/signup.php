<main class="main">
  <section class="signup">
    <div class="form-container">
      <div class="signup-container form-content">
        <div class="signup-header form-header">
          <h3 class="form-heading signup-heading">Đăng ký</h3>
          <span class="form-caption sigin-caption">Đã có tài khoản?<a href="index.php?act=signin"> Đăng nhập</a></span>
          <!-- <div class="form-social signup-social">
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
          <h4 class="form-already signup-already">
            <span>hoặc đăng nhập với email</span>
          </h4> -->
        </div>

        <form action="index.php?act=signup" class="form signup-form" method="post" enctype="multipart/form-data">
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">Name</label>
            <input type="text" class="form-input signup-input" name="name" placeholder="Họ và tên" required />
          </div>
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">Username</label>
            <input type="text" class="form-input signup-input" name="id_user" placeholder="Tên đăng nhập" required />
          </div>
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">Email</label>
            <input type="text" class="form-input signup-input" name="email" placeholder="Email" required />
          </div>
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">Password</label>
            <input type="password" class="form-input signup-input" name="password" placeholder="Mật khẩu" required />
          </div>
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">RePassword</label>
            <input type="password" class="form-input signup-input" name="password2" placeholder="Xác nhận mật khẩu" required />
          </div>

          <div class="form-support signup-support">
            <div class="form-remember signup-remember">
              <input type="checkbox" id="remember" class="form-remember-input" />
              <label for="remember" class="form-remember-label">Nhớ tài khoản</label>
            </div>

            <a href="index.php?act=forgot_password" class="form-forgot">Quên mật khẩu?</a>
          </div>
          <input type="hidden" name="role" value="0">
          <button class="form-submit signup-submit" name="btn_submit">Đăng ký</button>
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