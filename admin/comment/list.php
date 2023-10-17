<div class="container">
  <div class="page-title">
    <h4 class="mt-5 font-weight-bold text-center">Tổng hợp bình luận</h4>
  </div>
  <div class="box box-primary">
    <div class="box-body">
      <table width="100%" class="table table-hover table-bordered text-center">
        <thead class="thead-dark">
          <tr>
            <th>Phòng</th>
            <th>Số bình luận</th>
            <th>Cũ nhất</th>
            <th>Mới nhất</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($list_comment as $lc) {
            extract($lc);
            $link_comment = "index.php?act=detail_comment&id_pro=" . $id_pro;
          ?>
            <tr>
              <td><?= $pro_name ?></td>
              <td><?= $quantity ?></td>
              <td><?= $oldest_date ?></td>
              <td><?= $newest_date ?></td>
              <td class="text-end">
                <a href="<?= $link_comment ?>" class="btn btn-outline-info btn-rounded">Chi tiết <i class="fas fa-info-circle"></i></i></a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>