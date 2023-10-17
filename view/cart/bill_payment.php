<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="index.php?act=cart" class="page-name active">Giỏ hàng</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="index.php?act=bill" class="page-name">Thông tin</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="index.php?act=bill_payment" class="page-name current">Thanh toán</a>
      </div>
    </div>
  </section>

  <section class="ship-info">
    <div class="container">
      <form action="index.php?act=bill_confirm" class="ship-info-container" method="post" enctype="application/x-www-form-urlencoded">
        <div class="ship-info-confirm">
          <div class="ship-info-contact ship-info-confirm-list">
            <div class="ship-info-contact-list ship-info-confirm-item">
              <?php
              if (isset($_SESSION['user_bill'])) {
                $email = $_SESSION['user_bill']['email'];
                $address = $_SESSION['user_bill']['address'];
              ?>
                <div class="ship-info-contact-item">
                  <span class="ship-info-contact-title">Liên hệ</span>
                  <span class="ship-info-contact-content"><?= $email ?></span>
                  <a href="index.php?act=user_info">Thay đổi</a>
                </div>
                <div class="ship-info-contact-item">
                  <span class="ship-info-contact-title">Bàn giao tại</span>
                  <span class="ship-info-contact-content">
                    <?= $address ?>
                  </span>
                  <a href="index.php?act=bill">Thay đổi</a>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="ship-info-method-shipping ship-info-confirm-list">
            <h3>Phương thức bàn giao</h3>
            <div class="ship-info-method-shipping-list ship-info-confirm-item">
              <div class="ship-info-method-shipping-item">
                <div class="ship-info-method-radio2">
                  <input type="radio" name="" id="ship_radio" checked />
                  <label for="ship_radio">Đặt cọc</label>
                </div>
              </div>
            </div>
          </div>

          <div class="ship-info-method-payment ship-info-confirm-list">
            <h3>Phương thức thanh toán</h3>
            <div class="ship-info-method-payment-list ship-info-confirm-item">
              <div class="ship-info-method-radio">
                <input type="radio" name="payment" id="mbbank" value="1" checked>
                <label for="mbbank">Chuyển khoản ngân hàng:VIETCOMBANK</label>
              </div>
              <span>Số tài khoản: 1012693591</span>
              <span>Tên tài khoản: DAM QUOC DAN</span>
              <span>Nội dung chuyển khoản: PAYHOUSE<?= rand(0, 9999) ?> - tài khoản email</span>
            </div>
            <div class="ship-info-method-payment-list ship-info-confirm-item">
              <div class="ship-info-method-radio2">
                <input type="radio" name="payment" id="tt" value="2">
                <label for="tt">Thanh toán khi nhận thuê</label>
              </div>
            </div>
            <div class="ship-info-method-payment-list ship-info-confirm-item">
              <div class="ship-info-method-radio2">
                <input type="radio" name="payment" id="vnpay" value="3">
                <label for="vnpay">Thanh toán cổng VNPAY
                </label>
                <img src="././public/images/vnpay-logo.png" alt="">
              </div>
            </div>
            <div class="ship-info-method-payment-list ship-info-confirm-item">
              <div class="ship-info-method-radio2">
                <input type="radio" name="payment" id="momo" value="4">
                <label for="momo">Thanh toán Ví MoMo ATM
                </label>
                <img src="././public/images/momo-logo.png" alt="">
              </div>
            </div>
          </div>
          <button class="ship-info-confirm-submit" name="redirect">
            Xác nhận thanh toán
          </button>
      
        </div>

        <div class="ship-info-bill ship-info-confirm-bill">
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
                <span>- Size: <?= $cart[6] ?></span>
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
              <span>Đặt cọc </span>
            </div>
          </div>
          <div class="bill-bottom">
            <div class="bill-total">
              <span class="bill-total-title">Tổng cộng</span>
              <span class="bill-total-unit">VND
                <span class="bill-total-money"> <?= number_format($total, "0", ",", ".") ?>đ</span></span>
            </div>
          </div>
        </div>

        <input type="hidden" name="name" value="<?= $order_name ?>">
        <input type="hidden" name="email" value="<?= $order_email ?>">
        <input type="hidden" name="address" value="<?= $order_address ?>">
        <input type="hidden" name="phone" value="<?= $order_phone ?>">
        <input type="hidden" name="total_order" value="<?= $total ?>">
        <input type="hidden" name="note" value="<?= (isset($note)) ? $note : "" ?>">
      </form>
    </div>
  </section>
</main>