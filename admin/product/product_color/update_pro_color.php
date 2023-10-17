<?php
if (is_array($product_color)) {
  extract($product_color);
}
?>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Sửa màu <?= $list_detail_pro_color[0]['pro_name'] ?>
          </div>
          <div class="card-body">
            <form action="index.php?act=update_color&id_pro=<?= $id_pro ?>" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
              <div class="row">
                <div class="form-group col-sm-8">
                  <label for="" class="form-label">Màu</label>
                  <input type="text" name="color" id="" class="form-control" value="<?= $color ?>" />
                </div>
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Mã màu</label>
                  <input type="text" name="id_pro_color" id="" disabled class="form-control" value="<?= $id_pro_color ?>" />
                </div>
              </div>

              <div class="mb-3 text-center mt-4">
                <input type="hidden" name="id_pro_color" value="<?= $id_pro_color ?>">
                <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_update_color" value="Cập nhật" class="btn btn-primary mr-3" />
                <a href="index.php?act=pro_detail_color&id_pro=<?= $id_pro ?>"><input type="button" class="btn btn-success" value="Danh sách" /></a>
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