<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Thêm ảnh chi tiết phòng
          </div>
          <div class="card-body">
            <form action="index.php?act=add_pro_detail_img" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Phòng</label>
                  <select name="id_pro" class="form-control" id="">
                    <?php
                    foreach ($list_pro as $lp) {
                      extract($lp);
                    ?>
                      <option value="<?= $id_pro ?>"><?= $pro_name ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Ảnh</label>
                  <input type="file" name="pro_detail_image" id="" class="form-control" required value="" />
                </div>
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Mã ảnh</label>
                  <input type="text" name="id_pro_detail_img" id="" readonly class="form-control" value="auto number" />
                </div>
              </div>

              <div class="mb-3 text-center mt-4">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_insert_img" value="Thêm mới" class="btn btn-primary mr-3" />
                <a href="index.php?act=list_detail_pro_img"><input type="button" class="btn btn-success" value="Danh sách" /></a>
              </div>
            </form>

            <?php
            if (isset($message_detail_img) && ($message_detail_img != "")) {
              echo "<h3 class='alert-success'>$message_detail_img</h3>";
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>