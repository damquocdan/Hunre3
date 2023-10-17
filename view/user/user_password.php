<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Trang chủ</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current">Đổi mật khẩu</a>
      </div>
    </div>
  </section>

  <section class="user">
    <div class="container">
      <div class="user-container">
        <aside class="user-aside">
          <div class="user-column">
            <h3 class="user-title">Đổi mật khẩu</h3>
            <div class="user-list">
              <div class="user-item">
                <a href="index.php?act=user_info" class="user-link">Tài khoản</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=user_bill" class="user-link">Đơn thuê của tôi</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=user_password" class="user-link active">Đổi mật khẩu</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=signout" class="user-link">Đăng xuất</a>
              </div>
            </div>
          </div>
        </aside>
        <article class="user-article">
          <?php
          if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
            extract($_SESSION['user']);
          }
          ?>
          <form action="index.php?act=user_password" class="user-form-layout" method="post" enctype="multipart/form-data">
            <div class="user-form-header">
              <h2>Đổi mật khẩu tài khoản</h2>
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Tài khoản</label>
              <input type="text" class="user-form-input" name="id_user" value="<?= $id_user ?>" disabled />
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Mật khẩu cũ</label>
              <input type="password" class="user-form-input" name="password" required />
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Mật khẩu mới</label>
              <input type="password" class="user-form-input" name="password2" required />
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Xác nhận mật khẩu mới</label>
              <input type="password" class="user-form-input" name="password3" required />
            </div>

            <div class="user-form-button">
              <input type="hidden" name="id_user" value="<?= $id_user ?>">
              <button type="submit" class="user-form-update" name="btn_change">
                Đổi mật khẩu
              </button>
            </div>

            <?php
            if (isset($message) && ($message != "")) {
              echo "<h3 class='alert-text $alert'>$message</h3>";
            }
            ?>

          </form>
        </article>
      </div>
    </div>
  </section>
</main>