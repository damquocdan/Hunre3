<main class="main">
  <section class="signup">
    <div class="form-container">
      <div class="signup-container form-content">
        <div class="signup-header form-header">
          <h3 class="form-heading signup-heading">Đổi mật khẩu</h3>
          <?php
          if (isset($_SESSION['user_2']) && (is_array($_SESSION['user_2']))) {
            extract($_SESSION['user_2']);
          }
          ?>
        </div>
        <form action="index.php?act=get_password" class="form signup-form" method="post" enctype="multipart/form-data">
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">Mật khẩu mới</label>
            <input type="password" class="form-input signup-input" name="password2" placeholder="Mật khẩu mới" required />
          </div>
          <div class="form-group signup-form-group">
            <label for="" class="form-label signup-form-label">Xác nhận mật khẩu mới</label>
            <input type="password" class="form-input signup-input" name="password3" placeholder="Xác nhận mật khẩu" required />
          </div>
          <input type="hidden" name="id_user" value="<?= $id_user ?>">
          <button class="form-submit signup-submit" name="btn_submit">Đổi mật khẩu</button>
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