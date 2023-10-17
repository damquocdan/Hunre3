<?php
if (is_array($product_detail_image)) {
  extract($product_detail_image);
}
?>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Sửa ảnh chi tiết phòng <?= $list_detail_pro_images[0]['pro_name'] ?>
          </div>
          <div class="card-body">
            <form action="index.php?act=update_pro_detail_image&id_pro=<?= $id_pro ?>" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
              <div class="row">
                <div class="form-group col-sm-8">
                  <label for="" class="form-label">Ảnh</label>
                  <input type="file" name="pro_detail_image" id="" class="form-control" value="<?= $pro_detail_image ?>" />
                  <div class="col-sm-4 mt-3">
                    <img src="../public/images/<?= $pro_detail_image ?>" style="height: 150px; width: 180px;" class="object-fit-contain" alt="">
                  </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Mã ảnh</label>
                  <input type="text" name="id_pro_detail_img" id="" disabled class="form-control" value="<?= $id_pro_detail_img ?>" />
                </div>
              </div>

              <div class="mb-3 text-center mt-4">
                <input type="hidden" name="id_pro_detail_img" value="<?= $id_pro_detail_img ?>">
                <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_update_detail_img" value="Cập nhật" class="btn btn-primary mr-3" />
                <a href="index.php?act=pro_detail_images&id_pro=<?= $id_pro ?>"><input type="button" class="btn btn-success" value="Danh sách" /></a>
              </div>
            </form>

            <?php
            if (isset($message_size) && ($message_size != "")) {
              echo "<h3 class='alert-success'>$message_size</h3>";
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>