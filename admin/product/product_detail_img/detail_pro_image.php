<div class="container">
  <div class="page-title">

    <h4 class="mt-5 font-weight-bold text-center">Chi tiết ảnh phòng</h4>
  </div>
  <div class="box box-primary">
    <div class="box-body">
      <form action="?btn_delete_all" method="post" class="table-responsive">
        <i class="ml-5">Phòng:
          <b>
            <?= $list_detail_pro_images[0]['pro_name'] ?>
          </b>
        </i>
        <table width="100%" class="table table-hover table-bordered text-center">
          <thead class="thead-dark">
            <tr>
              <th>Mã ảnh phòng</th>
              <th>Ảnh</th>
              <th> <a href="index.php?act=add_pro_detail_img" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($list_detail_pro_images as $ldpi) {
              extract($ldpi);
              $update_pro_detail_img = "index.php?act=update_pro_detail_img&id_pro_detail_img=" . $id_pro_detail_img . "&id_pro=" . $id_pro;
              $delete_pro_detail_img = "index.php?act=delete_pro_detail_img&id_pro_detail_img=" . $id_pro_detail_img . "&id_pro=" . $id_pro;
              $productDetailImg = $img_path_admin . $pro_detail_image;
            ?>
              <tr>
                <td><?= $id_pro_detail_img ?></td>
                <td>
                  <img src="<?= $productDetailImg ?>" style="height: 150px; width: 180px;" class="object-fit-contain" alt="">
                </td>
                <td class="text-end">
                  <a href="<?= $update_pro_detail_img ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                  <a href="<?= $delete_pro_detail_img ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
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
        <a class="btn btn-dark" href="index.php?act=list_detail_pro_img">Quay lại</a>
      </form>
    </div>
  </div>
</div>