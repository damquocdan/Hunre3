<div class="content">
  <div class="container">
    <div class="page-title">
      <h4 class="mt-5 font-weight-bold text-center">
        Danh sách phòng
      </h4>
    </div>
    <div class="box box-primary">
      <div class="box-body">
        <form action="?btn_delete_all" method="post" class="table-responsive">
          <table width="100%" class="table table-hover table-bordered text-center">
            <thead class="thead-dark">
              <tr>
                <th>Mã phòng</th>
                <th>Tên phòng</th>
                <th>Ảnh</th>
                <th>Đơn giá</th>
                <th>Giảm giá</th>
                <th>Khu vực</th>
                <th>Lượt xem</th>
                <th>Đặc biệt</th>
                <th>
                  <a href="index.php?act=add_product" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($list_pro as $lp) {
                extract($lp);
                $update_product = "index.php?act=update_product&id_pro=" . $id_pro;
                $delete_product = "index.php?act=delete_product&id_pro=" . $id_pro;
                $product_image = $img_path_admin . $image;
                if (is_file($product_image)) {
                  $img = "<img src='$product_image' height='80' width='80' class='object-fit-contain'>";
                } else {
                  $img = "No image";
                }
              ?>
                <tr>
                  <td><?= $id_pro ?></td>
                  <td><?= $pro_name ?></td>
                  <td><?= $img ?></td>
                  <td><?= number_format($price, "0", ",", ".") ?>đ</td>
                  <td><?= ($price_sale) ? number_format($price_sale, "0", ",", ".") . "đ" : "No sale" ?></td>
                  <td><?= $brand_name ?></td>
                  <td><?= $views ?></td>
                  <td><?= ($special == 1) ? "Đặc biệt" : "Bình thường" ?></td>
                  <td class="text-end">
                    <a href="<?= $update_product ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                    <a href="<?= $delete_product ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>

          <div class="mt-3" width="100%">
            <ul class="pagination justify-content-center">
              <?php
              for ($i = 1; $i <= $_SESSION['total_page']; $i++) {
              ?>
                <li class="page-item" <?= $_SESSION['page'] == $i ? 'active' : '' ?>>
                  <a class="page-link" href="index.php?act=list_product&page=<?= $i ?>"><?= $i ?></a>
                </li>
              <?php
              }
              ?>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>