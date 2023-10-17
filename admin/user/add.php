<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">Thêm mới tài khoản</div>
          <div class="card-body">
            <form action="index.php?act=add_user" method="POST" enctype="multipart/form-data" id="admin_add_kh">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Mã tài khoản(tên đăng nhập)</label>
                  <input type="text" name="id_user" id="" class="form-control" required>
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Mật khẩu</label>
                  <input type="password" name="password" id="" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Ảnh</label>
                  <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Họ và tên</label>
                  <input type="text" name="name" id="" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Số điện thoại</label>
                  <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Email</label>
                  <input type="email" name="email" id="" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Địa chỉ</label>
                  <input type="address" name="address" id="" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label>Vai trò</label>
                  <div class="form-control">
                    <label class="radio-inline mr-3">
                      <input type="radio" value="0" name="role">Khách hàng
                    </label>
                    <label class="radio-inline">
                      <input type="radio" value="1" name="role" checked>Nhân viên
                    </label>
                  </div>
                </div>
              </div>
              <!-- <div class="row">
              </div> -->
              <div class="mb-3 text-center mt-3">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-primary mr-3">
                <a href="index.php?act=list_user"><input type="button" class="btn btn-success" value="Danh sách"></a>
              </div>
            </form>

            <?php
            if (isset($message) && ($message != "")) {
              echo "<h3 class='$alert'>$message</h3>";
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>