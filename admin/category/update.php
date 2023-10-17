<?php
if (is_array($category)) {
  extract($category);
}
?>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Cập nhật danh mục
          </div>
          <div class="card-body">
            <form action="index.php?act=update_cate" method="POST" id="edit_loai">
              <div class="mb-3">
                <label for="" class="form-label">Mã danh mục</label>
                <input type="text" name="id_cate" class="form-control" readonly value="<?= $id_cate ?>" />
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Tên danh mục</label>
                <input type="text" name="cate_name" placeholder="Nhập tên danh mục" class="form-control" value="<?= $cate_name ?>" />
              </div>
              <div class="mb-3 text-center">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3" />
                <a href="index.php?act=list_category"><input type="button" class="btn btn-success" value="Danh sách" /></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>