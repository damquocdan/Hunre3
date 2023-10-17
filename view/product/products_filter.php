<?php
if (isset($_GET['field']) && ($_GET['field'] != "") && isset($_GET['condition']) && ($_GET['condition'] != "")) {
?>
  <select name="" id="" class="filter-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <!-- <option value="index.php?act=products_field&field=<?= $_GET['field'] ?>&condition=<?= $_GET['condition'] ?>&field2=special&condition2=1">Mới nhất</option> -->
    <option <?php if (isset($_GET['sort_field']) && ($_GET['sort_field'] == "id_pro") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field=<?= $_GET['field'] ?>&condition=<?= $_GET['condition'] ?>&sort_field=id_pro&sort=asc">Cũ đến mới</option>
    <option <?php if (isset($_GET['sort_field']) && ($_GET['sort_field'] == "views")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field=<?= $_GET['field'] ?>&condition=<?= $_GET['condition'] ?>&sort_field=views&sort=desc">Nổi bật nhất</option>
    <option <?php if (isset($_GET['sort_field']) && ($_GET['sort_field'] == "price") && (isset($_GET['sort'])) && ($_GET['sort'] == "desc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field=<?= $_GET['field'] ?>&condition=<?= $_GET['condition'] ?>&sort_field=price&sort=desc">Giá giảm dần</option>
    <option <?php if (isset($_GET['sort_field']) && ($_GET['sort_field'] == "price") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field=<?= $_GET['field'] ?>&condition=<?= $_GET['condition'] ?>&sort_field=price&sort=asc">Giá tăng dần</option>
    <option <?php if (!isset($_GET['sort_field'])) {
              echo "selected";
            } ?> value="index.php?act=products_field&field=<?= $_GET['field'] ?>&condition=<?= $_GET['condition'] ?>">Sắp xếp</option>
    <option <?php if (isset($_GET['sort_field']) && ($_GET['sort_field'] == "pro_name") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field=<?= $_GET['field'] ?>&condition=<?= $_GET['condition'] ?>&sort_field=pro_name&sort=asc">A - Z</option>
    <option <?php if (isset($_GET['sort_field']) && ($_GET['sort_field'] == "pro_name") && (isset($_GET['sort'])) && ($_GET['sort'] == "desc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field=<?= $_GET['field'] ?>&condition=<?= $_GET['condition'] ?>&sort_field=pro_name&sort=desc">Z - A</option>
  </select>
<?php
} else {
?>
  <select name="" id="" class="filter-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <!-- <option value="index.php?act=products_field&field=special&condition=1">Mới nhất</option> -->
    <option <?php if (isset($_GET['field_sort']) && ($_GET['field_sort'] == "id_pro") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field_sort=id_pro&sort=asc">Cũ đến mới</option>
    <option <?php if (isset($_GET['field_sort']) && ($_GET['field_sort'] == "views") && (isset($_GET['sort'])) && ($_GET['sort'] == "desc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field_sort=views&sort=desc">Nổi bật nhất</option>
    <option <?php if (isset($_GET['field_sort']) && ($_GET['field_sort'] == "price") && (isset($_GET['sort'])) && ($_GET['sort'] == "desc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field_sort=price&sort=desc">Giá giảm dần</option>
    <option <?php if (isset($_GET['field_sort']) && ($_GET['field_sort'] == "price") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field_sort=price&sort=asc">Giá tăng dần</option>
    <option <?php if (isset($_GET['act']) && ($_GET['act'] == "products")) {
              echo "selected";
            } ?> value="index.php?act=products">Sắp xếp</option>
    <option <?php if (isset($_GET['field_sort']) && ($_GET['field_sort'] == "pro_name") && (isset($_GET['sort'])) && ($_GET['sort'] == "asc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field_sort=pro_name&sort=asc">A - Z</option>
    <option <?php if (isset($_GET['field_sort']) && ($_GET['field_sort'] == "pro_name") && (isset($_GET['sort'])) && ($_GET['sort'] == "desc")) {
              echo "selected";
            } ?> value="index.php?act=products_field&field_sort=pro_name&sort=desc">Z - A</option>
  </select>
<?php
}
?>