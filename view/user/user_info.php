<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Trang chủ</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current">Tài khoản</a>
      </div>
    </div>
  </section>

  <section class="user">
    <div class="container">
      <div class="user-container">
        <aside class="user-aside">
          <div class="user-column">
            <h3 class="user-title">TÀI KHOẢN</h3>
            <div class="user-list">
              <div class="user-item">
                <a href="index.php?act=user_info" class="user-link active">Tài khoản</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=user_bill" class="user-link">Đơn thuê của tôi</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=user_password" class="user-link">Đổi mật khẩu</a>
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
          <form action="index.php?act=user_info" class="user-form-layout" method="post" enctype="multipart/form-data">
            <div class="user-form-header">
              <h2>Thông tin của bạn</h2>
              <h4>Cập nhật thông tin mới</h4>
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Họ và tên</label>
              <input type="text" class="user-form-input" name="name" value="<?= $name ?>" />
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Tên đăng nhập</label>
              <input type="text" class="user-form-input" name="id_user" value="<?= $id_user ?>" disabled />
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Email</label>
              <input type="email" class="user-form-input" name="email" value="<?= $email ?>" />
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Số điện thoại</label>
              <input type="text" class="user-form-input" name="phone" value="<?= $phone ?>" />
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Địa chỉ</label>
              <input type="text" class="user-form-input" name="address" value="<?= $address ?>" />
            </div>
            <div class="user-form-group">
              <label for="" class="user-form-label">Hình ảnh</label>
              <?php
              if ($image != "") {
              ?>
                <img src="<?= $img_path_view . $image ?>" alt="">
              <?php
              }
              ?>
              <input type="file" class="user-form-input" name="image" value="<?= $image ?>" />
            </div>

            <div class="user-form-button">
              <input type="hidden" name="id_user" value="<?= $id_user ?>">
              <button type="submit" class="user-form-update" name="btn_update">
                Cập nhật
              </button>
              <button type="reset" class="user-form-reset">Hủy</button>
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