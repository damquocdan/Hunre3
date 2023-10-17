<div class="content">
  <div class="container">
    <div class="container">
      <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">
          Danh sách danh mục
        </h4>
      </div>
      <div class="box box-primary">
        <div class="box-body">
          <form action="?btn_delete_all" method="post" class="table-responsive">
            <table width="100%" class="table table-hover table-bordered text-center">
              <thead class="thead-dark">
                <tr>
                  <th>Mã danh mục</th>
                  <th>Tên danh mục</th>
                  <th>
                    <a href="index.php?act=add_category" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($list_category as $lc) {
                  extract($lc);
                  $update_category = "index.php?act=update_category&id_cate=" . $id_cate;
                  $delete_category = "index.php?act=delete_category&id_cate=" . $id_cate;
                ?>
                  <tr>
                    <td><?= $id_cate ?></td>
                    <td><?= $cate_name  ?></td>
                    <td class="text-end">
                      <a href="<?= $update_category ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                      <a href="<?= $delete_category ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                <?php
                }
                ?>
                <!-- <tr>
                  <td>
                    <input type="checkbox" name="" value="" />
                  </td>
                  <td></td>
                  <td></td>
                  <td class="text-end">
                    <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                    <a href="" class="btn btn-outline-danger btn-rounded" onclick=""><i class="fas fa-trash"></i></a>
                  </td>
                </tr> -->
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>