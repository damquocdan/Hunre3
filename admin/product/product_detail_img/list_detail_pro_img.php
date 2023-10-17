<div class="container">
  <div class="page-title">
    <h4 class="mt-5 font-weight-bold text-center">Tổng hợp ảnh phòng</h4>
  </div>
  <div class="box box-primary">
    <div class="box-body">
      <table width="100%" class="table table-hover table-bordered text-center">
        <thead class="thead-dark">
          <tr>
            <th>phòng</th>
            <th>Số lượng ảnh</th>
            <th>
              <a href="index.php?act=add_pro_detail_img" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($list_pro_detail_img as $lpdi) {
            extract($lpdi);
            $link_pro_detail_img = "index.php?act=pro_detail_images&id_pro=" . $id_pro;
          ?>
            <tr>
              <td><?= $pro_name ?></td>
              <td><?= $quantity ?></td>
              <td class="text-end">
                <a href="<?= $link_pro_detail_img ?>" class=" btn btn-outline-info btn-rounded">Chi tiết <i class="fas fa-info-circle"></i></i></a>
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
              <a class="page-link" href="index.php?act=list_detail_pro_img&page=<?= $i ?>"><?= $i ?></a>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>