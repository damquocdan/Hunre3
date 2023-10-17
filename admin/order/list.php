<div class="content">
  <div class="container" style="max-width: 1265px;">
    <div class="page-title">
      <h4 class="mt-5 font-weight-bold text-center">
        Danh sách đơn thuê
      </h4>
    </div>
    <div class="box box-primary">
      <div class="box-body">
        <form action="?btn_delete_all" method="post" class="table-responsive">
          <table width="100%" class="table table-hover table-bordered text-center">
            <thead class="thead-dark">
              <tr>
                <th>Mã đơn thuê</th>
                <th>Khách hàng</th>
                <th>Số lượng phòng</th>
                <th>Tổng giá</th>
                <th>Ngày đặt</th>
                <th>Note</th>
                <th>Phương thức thanh toán</th>
                <th>Tình trạng thanh toán</th>
                <th>Tình trạng đơn thuê</th>
                <th>
                  <a href="" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($list_order as $lo) {
                extract($lo);
                $update_order = "index.php?act=update_order&id_order=" . $id_order;
                $delete_order = "index.php?act=delete_order&id_order=" . $id_order;
                $countProduct = countOrderTotal($id_order);
              ?>
                <tr>
                  <td><?= $id_bill ?></td>
                  <td class="text-left">
                    <span>Họ tên: <?= $order_name ?></span>
                    <br>
                    <span>Địa chỉ: <?= $order_address ?></span>
                    <br>
                    <span>Email: <?= $order_email ?></span>
                    <br>
                    <span>Số điện thoại: <?= $order_phone ?></span>
                  </td>
                  <td><?= $countProduct ?></td>
                  <td><?= number_format($total_order, "0", ",", ".") ?>đ</td>
                  <td><?= $date ?></td>
                  <td><?= $note ?></td>
                  <td>
                    <?php
                    if ($payment == 1) {
                      echo "Chuyển khoản ngân hàng";
                    } else if ($payment == 2) {
                      echo "Thanh toán trực tiếp";
                    } else if ($payment == 3) {
                      echo "Thanh toán qua cổng VNPAY";
                    } else if ($payment == 4) {
                      echo "Thanh toán ví MoMo ATM";
                    }
                    ?>
                  </td>
                  <td>
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
                  </td>
                  <td>
                    <?php
                    if ($status == 0) {
                      echo "Chưa thực hiện";
                    } else if ($status == 1) {
                      echo "Đang xử lý";
                    } else if ($status == 2) {
                      echo "Đang bàn giao";
                    } else if ($status == 3) {
                      echo "Đã đặt thành công";
                    }
                    ?>
                  </td>
                  <td class="text-end">
                    <a href="<?= $update_order ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                    <a href="<?= $delete_order ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>

          <div class="mt-3" width="100%">
            <ul class="pagination justify-content-center">

            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>