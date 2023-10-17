<?php
if (is_array($product)) {
  extract($product);
}

$product_image = $img_path_admin . $image;
if (is_file($product_image)) {
  $img = "<img src='$product_image' height='120' width='120'>";
} else {
  $img = "No image";
}
?>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Sửa phòng
          </div>
          <div class="card-body">
            <form action="index.php?act=update_pro" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Danh mục</label>
                  <select name="id_cate" class="form-control" id="">
                    <?php
                    foreach ($list_cate as $lc) {
                      extract($lc);
                      if ($id_cate == $product['id_cate']) {
                        $selected = "selected";
                      } else {
                        $selected = "";
                      }
                    ?>
                      <option value="<?= $id_cate ?>" <?= $selected ?>><?= $cate_name ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group col-sm-4">
                  <label for="pro_name" class="form-label">Tên sản phẩm</label>
                  <input type="text" name="pro_name" id="pro_name" class="form-control" value="<?= $pro_name ?>" />
                </div>
                <div class="form-group col-sm-4">
                  <label for="id_pro" class="form-label">Mã sản phẩm</label>
                  <input type="text" name="" id="id_pro" disabled class="form-control" value="<?= $id_pro ?>" />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-4">
                  <div class="row align-items-center">
                    <div class="col-sm-8">
                      <label for="image" class="form-label">Ảnh phòng</label>
                      <input type="file" name="image" id="image" class="form-control" />
                      <?= $img ?>
                    </div>
                  </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="price" class="form-label">Đơn giá (vnđ)</label>
                  <input type="text" name="price" id="price" class="form-control" value="<?= $price ?>" />
                </div>
                <div class="form-group col-sm-4">
                  <label for="price_sale" class="form-label">Giảm giá (vnđ)</label>
                  <input type="text" name="price_sale" id="price_sale" class="form-control" value="<?= $price_sale ?>" />
                </div>
              </div>
              <div class="row"></div>
              <div class="row">
                <div class="form-group col-sm-4">
                  <label>Phòng đặc biệt?</label>
                  <div class="form-control">
                    <?php
                    if ($special == 1) {
                      echo "<label class='radio-inline mr-3'>
                        <input type='radio' value='" . $special . "' name='special' checked/>Đặc biệt
                      </label>";
                      echo "<label class='radio-inline mr-3'>
                              <input type='radio' value='0' name='special'/>Bình thường
                            </label>";
                    } else if ($special == 0) {
                      echo "<label class='radio-inline mr-3'>
                            <input type='radio' value='1' name='special'/>Đặc biệt
                            </label>";
                      echo "<label class='radio-inline mr-3'>
                              <input type='radio' value='" . $special . "' name='special' checked/>Bình thường
                            </label>";
                    }
                    ?>
                  </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="gender" class="form-label">Giới tính</label>
                  <input type="text" name="gender" id="gender" class="form-control" value="<?= $gender ?>" />
                </div>
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Thương hiệu</label>
                  <select name="id_brand" class="form-control" id="">
                    <?php
                    foreach ($list_brand as $lb) {
                      extract($lb);
                      if ($id_brand == $product['id_brand']) {
                        $selected = "selected";
                      } else {
                        $selected = "";
                      }
                    ?>
                      <option value="<?= $id_brand ?>" <?= $selected ?>><?= $brand_name ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">

                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Số lượt xem</label>
                  <input type="text" name="views" id="" readonly class="form-control" value="<?= $views ?>" />
                </div>
                <div class="form-group col-sm-12">
                  <label for="txtarea" class="form-label">Mô tả phòng</label>
                  <textarea id="txtarea" spellcheck="false" name="description" class="form-control form-control-lg mb-3" id="textareaExample" rows="10"><?= $description ?></textarea>
                </div>
              </div>

              <div class="mb-3 text-center">
                <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3" />
                <a href="index.php?act=list_product"><input type="button" class="btn btn-success" value="Danh sách" /></a>
              </div>
            </form>

            <?php
            if (isset($message) && ($message != "")) {
              echo "<h3 class='alert-success'>$message</h3>";
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>