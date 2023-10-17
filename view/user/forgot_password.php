<main class="main">
  <section class="signup">
    <div class="form-container">
      <div class="signup-container form-content">
        <div class="signup-header form-header">
          <h3 class="form-heading signup-heading">Quên mật khẩu</h3>
        </div>

        <form action="index.php?act=forgot_password" class="form signup-form" method="post" enctype="multipart/form-data">
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">Username</label>
            <input type="text" class="form-input signup-input" name="id_user" placeholder="Tên đăng nhập" required />
          </div>
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">Email</label>
            <input type="text" class="form-input signup-input" name="email" placeholder="Email" required />
          </div>
          <button class="form-submit signup-submit" name="btn_submit">Lấy lại mật khẩu</button>
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