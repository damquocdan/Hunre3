<div class="container">
  <div class="page-title">

    <h4 class="mt-5 font-weight-bold text-center">Chi tiết bình luận</h4>
  </div>
  <div class="box box-primary">
    <div class="box-body">
      <form action="?btn_delete_all" method="post" class="table-responsive">
        <i class="ml-5">Hàng hóa:
          <b>
            <?= ($list_detail_comment) ? $list_detail_comment[0]['pro_name'] : "" ?>
          </b>
        </i>
        <table width="100%" class="table table-hover table-bordered text-center">
          <thead class="thead-dark">
            <tr>
              <th>Đánh giá</th>
              <th>Nội dung</th>
              <th>Ngày BL</th>
              <th>Người BL</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($list_detail_comment as $ldc) {
              extract($ldc);
              $delete_comment = "index.php?act=delete_comment&id_comment=" . $id_comment . "&id_pro=" . $id_pro;
            ?>
              <tr>
                <td><?= $rate ?> sao</td>
                <td><?= $content ?></td>
                <td><?= $date ?></td>
                <td><?= $id_user ?></td>
                <td class="text-end">
                  <a href="<?= $delete_comment ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            <?php
            }
            ?>

          </tbody>

        </table>
        <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
        <div class="mt-3" width="100%">
          <ul class="pagination justify-content-center">
          </ul>
        </div>
        <a class="btn btn-dark" href="index.php?act=comment">Quay lại</a>
      </form>
    </div>
  </div>
</div>