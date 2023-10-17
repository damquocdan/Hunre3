<div class="content">
  <div class="container">
    <div class="page-title">
      <h4 class="mt-5 font-weight-bold text-center">Danh sách tài khoản</h4>
    </div>
    <div class="box box-primary">
      <div class="box-body">
        <form action="?btn_delete_all" method="post" class="table-responsive">
          <table width="100%" class="table table-hover table-bordered text-center">
            <thead class="thead-dark">
              <tr>
                <th>Mã tài khoản</th>
                <th>Mật khẩu</th>
                <th>Ảnh</th>
                <th>Họ tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th><a href="index.php?act=add_user" class="btn btn-success text-white">Thêm mới
                    <i class="fas fa-plus-circle"></i></a></th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($list_user as $lu) {
                extract($lu);
                $update_user = "index.php?act=update_user&id_user=" . $id_user;
                $delete_user = "index.php?act=delete_user&id_user=" . $id_user;
                $user_image = $img_path_admin . $image;
                if (is_file($user_image)) {
                  $user_img = "<img src='$user_image' height='80' width='80' class='object-fit-contain'>";
                } else {
                  $user_img = "No image";
                }
              ?>
                <tr>
                  <td><?= $id_user ?></td>
                  <td><?= $password ?></td>
                  <td><?= $user_img ?></td>
                  <td><?= $name ?></td>
                  <td><?= $phone ?></td>
                  <td><?= $email ?></td>
                  <td class="text-left"><?= $address ?></td>
                  <td><?= ($role == 1) ? "Nhân viên" : "Khách hàng" ?></td>
                  <td class="text-end">
                    <a href="<?= $update_user ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                    <a href="<?= $delete_user ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc là muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>

              <?php
              }
              ?>

            </tbody>

          </table>
        </form>
      </div>
    </div>
  </div>
</div>