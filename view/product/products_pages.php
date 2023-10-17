<?php
// var_dump($param);
if ($_SESSION['page'] > 1) {
  $prev_page = $_SESSION['page'] - 1;
?>
  <a href="index.php?act=<?= $param ?>page=<?= $prev_page ?>" class="products-pages-item">
    <i class="fa-solid fa-angles-left"></i>
  </a>
<?php
}
?>
<?php
if ($_SESSION['page'] > 3) {
  $first_page = 1;
?>
  <a href="index.php?act=<?= $param ?>page=<?= $first_page ?>" class="products-pages-item"><?= $first_page ?></a>
<?php
}
?>
<?php
for ($i = 1; $i <= $_SESSION['total_pages']; $i++) {
  if ($i > $_SESSION['page'] - 3 && $i < $_SESSION['page'] + 3) {
?>
    <a href="index.php?act=<?= $param ?>page=<?= $i ?>" class="products-pages-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>"><?= $i ?></a>
<?php
  }
}
?>
<?php
if ($_SESSION['total_pages'] < $_SESSION['total_pages'] - 3) {
  $end_page = $_SESSION['total_pages'];
?>
  <a href="index.php?act=<?= $param ?>page=<?= $end_page ?>" class="products-pages-item"><?= $end_page ?></a>
<?php
}
?>
<?php
if ($_SESSION['page'] < $_SESSION['total_pages'] - 1) {
  $next_page = $_SESSION['page'] + 1;
?>
  <a href="index.php?act=<?= $param ?>page=<?= $next_page ?>" class="products-pages-item">
    <i class="fa-solid fa-angles-right"></i>
  </a>
<?php
}
?>