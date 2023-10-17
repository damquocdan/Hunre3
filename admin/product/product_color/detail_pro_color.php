<div class="container">
  <div class="page-title">

    <h4 class="mt-5 font-weight-bold text-center">Chi tiết kích thước phòng</h4>
  </div>
  <div class="box box-primary">
    <div class="box-body">
      <form action="?btn_delete_all" method="post" class="table-responsive">
        <i class="ml-5">Phòng:
          <b>
            <?= $list_detail_pro_color[0]['pro_name'] ?>
          </b>
        </i>
        <table width="100%" class="table table-hover table-bordered text-center">
          <thead class="thead-dark">
            <tr>
              <th>Mã màu Phòng</th>
              <th>Màu sắc</th>
              <th> <a href="index.php?act=add_product" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($list_detail_pro_color as $ldpc) {
              extract($ldpc);
              $update_pro_color = "index.php?act=update_pro_color&id_pro_color=" . $id_pro_color . "&id_pro=" . $id_pro;
              $delete_pro_color = "index.php?act=delete_pro_color&id_pro_color=" . $id_pro_color . "&id_pro=" . $id_pro;
            ?>
              <tr>
                <td><?= $id_pro_color ?></td>
                <td><?= $color ?></td>
                <td class="text-end">
                  <a href="<?= $update_pro_color ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                  <a href="<?= $delete_pro_color ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>

        </table>
        <input type="hidden" name="ma_hh" value="">
        <div class="mt-3" width="100%">
          <ul class="pagination justify-content-center">
          </ul>
        </div>
        <a class="btn btn-dark" href="index.php?act=list_pro_color">Quay lại</a>
      </form>
    </div>
  </div>
</div>