<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Thêm mới phòng
          </div>
          <div class="card-body">
            <form action="index.php?act=add_product" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
              <div class="row">
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Danh mục</label>
                  <select name="id_cate" class="form-control" id="">
                    <?php
                    foreach ($list_cate as $lc) {
                      extract($lc);
                    ?>
                      <option value="<?= $id_cate ?>"><?= $cate_name ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group col-sm-4">
                  <label for="pro_name" class="form-label">Tên phòng</label>
                  <input type="text" name="pro_name" id="pro_name" class="form-control" required value="" />
                </div>
                <div class="form-group col-sm-4">
                  <label for="id_pro" class="form-label">Mã phòng</label>
                  <input type="text" name="id_pro" id="id_pro" readonly class="form-control" value="auto number" />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-4">
                  <div class="row align-items-center">
                    <div class="col-sm-8">
                      <label for="image" class="form-label">Ảnh phòng</label>
                      <input type="file" name="image" id="image" class="form-control" required />
                    </div>
                  </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="price" class="form-label">Đơn giá (vnđ)</label>
                  <input type="text" name="price" id="price" class="form-control" value="" required />
                </div>
                <div class="form-group col-sm-4">
                  <label for="price_sale" class="form-label">Giảm giá (vnđ)</label>
                  <input type="text" name="price_sale" id="price_sale" class="form-control" value="" />
                </div>
              </div>
              <div class="row"></div>
              <div class="row">
                <div class="form-group col-sm-4">
                  <label>Phòng đặc biệt?</label>
                  <div class="form-control">
                    <label class="radio-inline mr-3">
                      <input type="radio" value="1" name="special" />Đặc biệt
                    </label>
                    <label class="radio-inline">
                      <input type="radio" value="0" name="special" checked />Bình
                      thường
                    </label>
                  </div>
                </div>
                <div class="form-group col-sm-4">
                  <label for="gender" class="form-label">Giới tính</label>
                  <input type="text" name="gender" id="gender" class="form-control" value="" required />
                </div>
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Khu vực</label>
                  <select name="id_brand" class="form-control" id="">
                    <?php
                    foreach ($list_brand as $lb) {
                      extract($lb);
                    ?>
                      <option value="<?= $id_brand ?>"><?= $brand_name ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="row">

                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Số lượt xem</label>
                  <input type="text" name="views" id="" readonly class="form-control" value="" />
                </div>
                <div class="form-group col-sm-12">
                  <label for="txtarea" class="form-label">Mô tả phòng</label>
                  <textarea id="txtarea" spellcheck="false" name="description" class="form-control form-control-lg mb-3" id="textareaExample" rows="3"></textarea>
                </div>
              </div>

              <div class="mb-3 text-center">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-primary mr-3" />
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

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Thêm màu sắc phòng
          </div>
          <div class="card-body">
            <form action="index.php?act=add_product" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
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
                  <label for="" class="form-label">Màu sắc</label>
                  <input type="text" name="color" id="" class="form-control" required value="" />
                </div>
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Mã màu sắc</label>
                  <input type="text" name="id_pro_color" id="" readonly class="form-control" value="auto number" />
                </div>
              </div>

              <div class="mb-3 text-center mt-4">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_insert_color" value="Thêm mới" class="btn btn-primary mr-3" />
                <a href="index.php?act=list_pro_color"><input type="button" class="btn btn-success" value="Danh sách" /></a>
              </div>
            </form>

            <?php
            if (isset($message_color) && ($message_color != "")) {
              echo "<h3 class='alert-success'>$message_color</h3>";
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Thêm kích thước phòng
          </div>
          <div class="card-body">
            <form action="index.php?act=add_product" method="POST" enctype="multipart/form-data" id="update_hang_hoa">
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
                  <label for="" class="form-label">Size</label>
                  <input type="text" name="size" id="" class="form-control" required value="" />
                </div>
                <div class="form-group col-sm-4">
                  <label for="" class="form-label">Mã kích thước</label>
                  <input type="text" name="id_pro_size" id="" readonly class="form-control" value="auto number" />
                </div>
              </div>

              <div class="mb-3 text-center mt-4">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_insert_size" value="Thêm mới" class="btn btn-primary mr-3" />
                <a href="index.php?act=list_pro_size"><input type="button" class="btn btn-success" value="Danh sách" /></a>
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