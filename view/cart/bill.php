<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="index.php?act=cart" class="page-name active">Giỏ phòng</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="index.php?act=bill" class="page-name current">Thông tin</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name">Thanh toán</a>
      </div>
    </div>
  </section>

  <section class="ship-info">
    <div class="container">
      <div class="ship-info-container">
        <div class="ship-info-user">
          <h4 class="ship-info-title">Thông tin bàn giao</h4>
          <?php
          if (isset($_SESSION['user_bill'])) {
            $id_user = $_SESSION['user_bill']['id_user'];
            $name = $_SESSION['user_bill']['name'];
            $address = $_SESSION['user_bill']['address'];
            $email = $_SESSION['user_bill']['email'];
            $image = $_SESSION['user_bill']['image'];
            $phone = $_SESSION['user_bill']['phone'];
          } else {
            $name = "";
            $address = "";
            $email = "";
            $image = "";
            $phone = "";
          }
          ?>
          <div class="ship-info-header">
            <!-- <div class="ship-info-image">
              <i class="fa-solid fa-user"></i>
            </div> -->
            <?php
            if (isset($_SESSION['user_bill'])) {
            ?>
              <div class="ship-info-name">
                <span><?= $name ?> (<?= $email ?>)</span>
                <a href="index.php?act=signout">Đăng xuât</a>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="ship-info-content">
            <form action="index.php?act=bill_payment" class="ship-info-form" method="post">
              <?php
              if (isset($_SESSION['user_bill'])) {
              ?>
                <div class="ship-info-form-group">
                  <input type="text" class="ship-info-input" name="address" placeholder="Địa chỉ" value="<?= $address ?>" required />
                </div>
                <div class="ship-info-form-group">
                  <input type="text" class="ship-info-input" name="name" placeholder="Họ và tên" value="<?= $name ?>" required />
                </div>
                <div class="ship-info-form-group">
                  <input type="email" class="ship-info-input" name="email" placeholder="Email" value="<?= $email ?>" disabled />
                  <input type="hidden" class="ship-info-input" name="email" placeholder="Email" value="<?= $email ?>" />
                </div>
                <div class="ship-info-form-group">
                  <input type="text" class="ship-info-input" name="phone" placeholder="Số điện thoại" value="<?= $phone ?>" required />
                  <input type="hidden" class="ship-info-input" name="id_user" value="<?= $id_user ?>" />
                </div>
                <div class="ship-info-form-group">
                  <textarea name="note" id="" cols="30" rows="6" placeholder="Ghi chú"><?= (isset($_SESSION['note'])) ? $_SESSION['note'] : "" ?></textarea>
                </div>
              <?php
              }
              ?>
              <div class="ship-info-button">
                <a href="index.php?act=cart" class="ship-info-return">Giỏ phòng</a>
                <button class="ship-info-submit" name="btn_submit">Tiếp tục đến phương thức thanh toán</button>
              </div>
            </form>
          </div>
        </div>
        <div class="ship-info-bill">
          <?php
          $total = 0;
          $i = 0;
          foreach ($_SESSION['cart'] as $cart) {
            $cart_image = $img_path_view . $cart[2];
            $into_money = $cart[3] * $cart[4];
            $total += $into_money;
          ?>
            <div class="bill-header">
              <img src="<?= $cart_image ?>" alt="" class="bill-image" />
              <div class="bill-product">
                <h3><?= $cart[1] ?></h3>
                <span>Số lượng: <?= $cart[4] ?></span>
                <span>- Kích thuớc: <?= $cart[6] ?></span>
              </div>
              <div class="bill-price">
                <span><?= number_format($into_money, "0", ",", ".") ?>đ</span>
              </div>
            </div>
          <?php
            $i++;
          }
          ?>
          <div class="bill-content">
            <div class="bill-content-item">
              <span> Giá Tạm tính</span>
              <span><?= number_format($total, "0", ",", ".") ?>đ</span>
            </div>
            <div class="bill-content-item">
              <span>Đặt cọc</span>
              <span> </span>
            </div>
          </div>
          <div class="bill-bottom">
            <div class="bill-total">
              <span class="bill-total-title">Tổng cộng</span>
              <span class="bill-total-unit">VND <span class="bill-total-money"> <?= number_format($total, "0", ",", ".") ?>₫</span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>