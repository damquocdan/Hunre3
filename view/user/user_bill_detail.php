<?php
if (is_array($user_order)) {
  extract($user_order);
}
?>

<main class="main">
  <section class="page">
    <div class="container">
      <div class="page-list">
        <a href="#" class="page-name active">Trang chủ</a>
        <i class="fa fa-angle-right page-icon"></i>
        <a href="#" class="page-name current">Đơn thuê <?= $id_bill ?></a>
      </div>
    </div>
  </section>

  <section class="user">
    <div class="container">
      <div class="user-container">
        <aside class="user-aside">
          <div class="user-column">
            <h3 class="user-title">Đơn thuê</h3>
            <div class="user-list">
              <div class="user-item">
                <a href="index.php?act=user_info" class="user-link">Tài khoản</a>
              </div>
              <div class="user-item">
                <a href="index.php?act=user_bill" class="user-link active">Đơn thuê của tôi</a>
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
          <div class="user-bill user-form-layout">
            <div class="user-bill-header">
              <h2>Đơn hàng <?= $id_bill ?></h2>
              <span>Đặt ngày <?= $date ?></span>
            </div>

            <div class="user-bill-status">
              <span>Đơn hàng đã đặt ngày <?= $date ?></span>
              <span>Ghi chú: <?= $note ?></span>
            </div>

            <table class="user-bill-table">
              <thead class="user-bill-thead">
                <tr>
                  <th>Phòng</th>
                  <th>Kích thước</th>
                  <th>Giá</th>
                  <th>Số lượng</th>
                  <th>Tổng</th>
                </tr>
              </thead>
              <tbody class="user-bill-tbody">
                <?php
                foreach ($user_order_total as $uot) {
                  extract($uot);
                  $into_money = $quantity * $price;
                ?>
                  <tr>
                    <td>
                      <span>
                        <?= $name ?>
                      </span>
                    </td>
                    <td>
                      <span><?= $size ?></span>
                    </td>
                    <td>
                      <span><?= number_format($price, "0", ",", ".") ?>đ </span>
                    </td>
                    <td>
                      <span><?= $quantity ?></span>
                    </td>
                    <td>
                      <span><?= number_format($into_money, "0", ",", ".") ?>đ</span>
                    </td>
                  </tr>
                <?php
                }
                ?>
                <!-- <tr>
                  <td>
                    <span>
                      Giày Chạy Bộ Nam Under Armour HOVR Infinite 4 -
                      BREEZE / US7
                    </span>
                  </td>
                  <td>
                    <span>41</span>
                  </td>
                  <td>
                    <span>3.795.000₫ </span>
                  </td>
                  <td>
                    <span>1</span>
                  </td>
                  <td>
                    <span>3.795.000₫</span>
                  </td>
                </tr> -->
              </tbody>
              <tfoot class="user-bill-tfoot">
                <tr>
                  <th class="user-bill-tfoot-title" colspan="4" scope="row">
                    Tổng phụ
                  </th>
                  <td class="user-bill-tfoot-content"><?= number_format($total_order, "0", ",", ".") ?>đ</td>
                </tr>
                <tr>
                  <th class="user-bill-tfoot-title" colspan="4" scope="row">
                    Đặt cọc 0VND
                  </th>
                  <td class="user-bill-tfoot-content">0₫</td>
                </tr>
                <tr>
                  <th class="user-bill-tfoot-title" colspan="4" scope="row">
                    Tổng
                  </th>
                  <td class="user-bill-tfoot-content"><?= number_format($total_order, "0", ",", ".") ?>VND</td>
                </tr>
              </tfoot>
            </table>
          </div>

          <div class="user-bill-list">
            <div class="user-bill-payment">
              <h3>Địa chỉ thanh toán</h3>
              <div class="user-bill-content">
                <div class="user-bill-item">
                  <span>
                    <span class="user-bill-payment-status">Tình trạng thanh toán:
                    </span>
                    <?php
                    if ($payment == 2 && $status != 3) {
                      echo "Chưa thanh toán";
                    } else if ($payment == 2 && $status == 3) {
                      echo "Đã thanh toán";
                    } else if ($payment == 1 && $status == 0) {
                      echo "Chưa thanh toán";
                    } else if ($payment == 1 && $status != 0) {
                      echo "Đã thanh toán";
                    } else if ($payment == 3 || $payment == 4) {
                      echo "Đã thanh toán";
                    }
                    ?>
                  </span>
                </div>
                <div class="user-bill-item">
                  <span> <?= $order_name ?> </span>
                </div>
                <div class="user-bill-item">
                  <span> <?= $order_address ?></span>
                </div>
              </div>
            </div>

            <div class="user-bill-address">
              <h3>Địa chỉ đặt thuê</h3>
              <div class="user-bill-content">
                <div class="user-bill-item">
                  <span>
                    <span class="user-bill-payment-status">Tình trạng vận chuyển:
                    </span>
                    <?php
                    if ($status == 0) {
                      echo "Chưa thực hiện";
                    } else if ($status == 1) {
                      echo "Đang xử lý";
                    } else if ($status == 2) {
                      echo "Đang bàn giao";
                    } else if ($status == 3) {
                      echo "Đã đặt phòng thành công";
                    }
                    ?>
                  </span>
                </div>
                <div class="user-bill-item">
                  <span> <?= $order_name ?> </span>
                </div>
                <div class="user-bill-item">
                  <span> <?= $order_address ?></span>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
</main>