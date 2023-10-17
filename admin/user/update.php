<?php
if (is_array($user)) {
  extract($user);
}

$user_image = $img_path_admin . $image;
if (is_file($user_image)) {
  $user_img = "<img src='$user_image' height='120' width='120'>";
} else {
  $user_img = "No image";
}
?>

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center bg-dark text-white text-uppercase">Cập nhật tài khoản</div>
          <div class="card-body">
            <form action="index.php?act=update_user_account&id_user=<?= $id_user ?>" method="POST" enctype="multipart/form-data" id="admin_add_kh">
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Mã tài khoản(tên đăng nhập)</label>
                  <input type="text" name="id_user" disabled id="" class="form-control" value="<?= $id_user ?>">
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Mật khẩu</label>
                  <input type="password" name="password" id="" class="form-control" value="<?= $password ?>">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Ảnh</label>
                  <input type="file" name="image" id="" class="form-control" value="<?= $image ?>">
                </div>
                <div class="col-sm-4">
                  <?= $user_img ?>
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Họ và tên</label>
                  <input type="text" name="name" id="" class="form-control" value="<?= $name ?>">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Số điện thoại</label>
                  <input type="text" name="phone" class="form-control" value="<?= $phone ?>">
                </div>
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Email</label>
                  <input type="email" name="email" id="" class="form-control" value="<?= $email ?>">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-sm-6">
                  <label for="" class="form-label">Địa chỉ</label>
                  <input type="address" name="address" id="" class="form-control" value="<?= $address ?>">
                </div>
                <div class="form-group col-sm-6">
                  <label>Vai trò</label>
                  <div class="form-control">
                    <?php
                    if ($role == 1) {
                      echo "<label class='radio-inline mr-3'>
                        <input type='radio' value='" . $role . "' name='role' checked/>Nhân viên
                      </label>";
                      echo "<label class='radio-inline mr-3'>
                              <input type='radio' value='0' name='role'/>Khách hàng
                            </label>";
                    } else if ($role == 0) {
                      echo "<label class='radio-inline mr-3'>
                            <input type='radio' value='1' name='role'/>Nhân viên
                            </label>";
                      echo "<label class='radio-inline mr-3'>
                              <input type='radio' value='" . $role . "' name='role' checked/>Khách hàng
                            </label>";
                    }
                    ?>
                  </div>
                </div>
              </div>
              <!-- <div class="row">
              </div> -->
              <div class="mb-3 text-center mt-3">
                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3">
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