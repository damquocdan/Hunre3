<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">
            Thêm danh mục
          </div>
          <div class="card-body">
            <form action="index.php?act=add_category" method="POST" id="add_loai">
              <div class="mb-3">
                <label for="id_cate" class="form-label">Mã loại</label>
                <input type="text" name="id_cate" class="form-control" disabled />
              </div>
              <div class="mb-3">
                <label for="cate_name" class="form-label">Tên loại</label>
                <input type="text" name="cate_name" class="form-control" required />
              </div>
              <div class="mb-3 text-center">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-primary mr-3" />
                <a href="index.php?act=list_category"><input type="button" class="btn btn-success" value="Danh sách" /></a>
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