<div class="container">
  <div class="page-title">

    <h4 class="mt-5 font-weight-bold text-center">Chi tiết Size phòng</h4>
  </div>
  <div class="box box-primary">
    <div class="box-body">
      <form action="?btn_delete_all" method="post" class="table-responsive">
        <i class="ml-5">phòng:
          <b>
            <?= $list_detail_pro_size[0]['pro_name'] ?>
          </b>
        </i>
        <table width="100%" class="table table-hover table-bordered text-center">
          <thead class="thead-dark">
            <tr>
              <th>Mã kích thước</th>
              <th>Kích thước</th>
              <th> <a href="index.php?act=add_product" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($list_detail_pro_size as $ldps) {
              extract($ldps);
              $update_pro_size = "index.php?act=update_pro_size&id_pro_size=" . $id_pro_size . "&id_pro=" . $id_pro;
              $delete_pro_size = "index.php?act=delete_pro_size&id_pro_size=" . $id_pro_size . "&id_pro=" . $id_pro;
            ?>
              <tr>
                <td><?= $id_pro_size ?></td>
                <td><?= $size ?></td>
                <td class="text-end">
                  <a href="<?= $update_pro_size ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                  <a href="<?= $delete_pro_size ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
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
        <a class="btn btn-dark" href="index.php?act=list_pro_size">Quay lại</a>
      </form>
    </div>
  </div>
</div>