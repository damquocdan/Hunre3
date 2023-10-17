<?php
if (is_array($order)) {
  extract($order);
}
?>

<div class="content">
  <div class="container">
    <div class="page-title">
      <h4 class="mt-5 font-weight-bold text-center">
        Chi tiết đơn thuê: <?= $id_bill ?>
      </h4>
    </div>
    <div class="box box-primary">
      <div class="box-body">
        <form action="index.php?act=update_order_delivered_total" method="post" class="table-responsive">
          <div class="row" style="gap: 0 20px; margin: 0; padding: 0 15px; align-items: center; justify-content: flex-end;">
            <div class="row" style="gap: 0 20px; margin: 0; align-items: center;">
              <button type="submit" name="btn_update_order" class="btn btn-success mb-1">
                Cập nhật
              </button>
              <div class="form-group">
                <label for="">Trạng thái đơn thuê:</label>
                <input type="hidden" name="id_order" value="<?= $id_order ?>">
                <select name="status" class="form-control" style="width: 100%;" id="">
                  <?php
                  if ($status == 0) {
                    echo "<option value='0' selected>Chưa thực hiện</option>";
                    echo "<option value='1'>Đang xử lý</option>";
                    echo "<option value='2'>Đang bàn giao</option>";
                    echo "<option value='3'>Đã đặt thành công</option>";
                  } else if ($status == 1) {
                    echo "<option value='0'>Chưa thực hiện</option>";
                    echo "<option value='1' selected>Đang xử lý</option>";
                    echo "<option value='2'>Đang bàn giao</option>";
                    echo "<option value='3'>Đã đặt thành công</option>";
                  } else if ($status == 2) {
                    echo "<option value='0'>Chưa thực hiện</option>";
                    echo "<option value='1'>Đang xử lý</option>";
                    echo "<option value='2' selected>Đang bàn giao</option>";
                    echo "<option value='3'>Đã đặt thành công</option>";
                  } else if ($status == 3) {
                    echo "<option value='0'>Chưa thực hiện</option>";
                    echo "<option value='1'>Đang xử lý</option>";
                    echo "<option value='2'>Đang bàn giao</option>";
                    echo "<option value='3' selected>Đã đặt thành công</option>";
                  }
                  ?>
                  <!-- <option value="0">Chưa thực hiện</option>
                  <option value="1">Đang xử lý</option>
                  <option value="2">Đang giao hàng</option>
                  <option value="3">Đã giao hàng</option> -->
                </select>
              </div>
            </div>
          </div>
          <table width="100%" class="table table-hover table-bordered text-center">
            <thead class="thead-dark">
              <tr>
                <th>Phòng</th>
                <th>Kích thước</th>
                <th>Màu</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
                <th>Tình trạng đơn hàng</th>
                <!-- <th>
                  <a href="" class="btn btn-success text-white">Thao tác</a>
                </th> -->
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($order_total as $ot) {
                extract($ot);
                $into_money = $quantity * $price;
                // $delete_order_total = "index.php?act=delete_order_delivered_total&id_order_total=" . $id_order_total . "&id_order=" . $id_order;
              ?>
                <tr>
                  <td>
                    <?= $name ?>
                  </td>
                  <td><?= $size ?></td>
                  <td><?= $color ?></td>
                  <td><?= number_format($price, "0", ",", ".") ?>đ</td>
                  <td><?= $quantity ?></td>
                  <td>
                    <?= number_format($into_money, "0", ",", ".") ?>đ
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
                  <!-- <td class="text-end">
                    <a href="" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                  </td> -->
                </tr>
              <?php
              }
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="6" class="text-left">Tổng phụ</th>
                <td><?= number_format($total_order, "0", ",", ".") ?>đ</td>
              </tr>
              <tr>
                <th colspan="6" class="text-left">Đặt cọc</th>
                <td>0đ</td>
              </tr>
              <tr>
                <th colspan="6" class="text-left">Tổng</th>
                <td><?= number_format($total_order, "0", ",", ".") ?>đ</td>
              </tr>
            </tfoot>
          </table>

          <div class="mt-3" width="100%">
            <ul class="pagination justify-content-center">

            </ul>
          </div>
          <a href="index.php?act=list_order_delivered" class="btn btn-dark">Quay lại</a>
        </form>
      </div>
    </div>
  </div>
</div>