<?php
require_once "pdo.php";

// User Side View
function listProduct($limit)
{
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
  }
  $current_page = $_GET['page'];
  $_SESSION['page'] = $_GET['page'];
  $offset = ($current_page - 1) * $limit;
  $total_pro = pdo_query_value("SELECT count(*) FROM product");
  $_SESSION['total_pages'] = ceil($total_pro / $limit);
  $sql = "SELECT * FROM product p, product_color pc, product_size ps WHERE p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND color <> '' AND size <> '' GROUP BY p.id_pro, p.pro_name ORDER BY p.id_pro DESC LIMIT $limit OFFSET $offset";
  $list_pro = pdo_query($sql);
  return $list_pro;
}

function listProductKeyword($keyword, $limit)
{
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
  }
  $current_page = $_GET['page'];
  $_SESSION['page'] = $_GET['page'];
  $offset = ($current_page - 1) * $limit;
  $total_pro = pdo_query_value("SELECT count(*) FROM product WHERE pro_name LIKE '%" . $keyword . "%'");
  $_SESSION['total_pages'] = ceil($total_pro / $limit);
  $sql = "SELECT * FROM product p, product_color pc, product_size ps WHERE p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND color <> '' AND size <> '' AND pro_name LIKE '%" . $keyword . "%' GROUP BY p.id_pro, p.pro_name ORDER BY p.id_pro DESC LIMIT $limit OFFSET $offset";
  $list_pro_keyword = pdo_query($sql);
  return $list_pro_keyword;
}

function listProductsFieldSort($field_sort, $sort, $limit)
{
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
  }
  $current_page = $_GET['page'];
  $_SESSION['page'] = $_GET['page'];
  $offset = ($current_page - 1) * $limit;
  $total_pro = pdo_query_value("SELECT count(*) FROM product");
  $_SESSION['total_pages'] = ceil($total_pro / $limit);

  $condition = "";
  $field_sort = isset($_GET['field_sort']) ? $_GET['field_sort'] : "";
  $sort = isset($_GET['sort']) ? $_GET['sort'] : "";
  if (!empty($field_sort) && !empty($sort)) {
    $condition = "ORDER BY `p`.`" . $field_sort . "` " . $sort;
  }
  $sql = "SELECT * FROM product p, product_color pc, product_size ps, product_brand pb WHERE p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND p.id_brand = pb.id_brand AND color <> '' AND size <> '' GROUP BY p.id_pro, p.pro_name $condition LIMIT $limit OFFSET $offset";
  $list_pro_field_sort = pdo_query($sql);
  return $list_pro_field_sort;
}

function listProductsFieldConditions($field, $condition, $field2, $condition2, $limit)
{
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
  }
  $current_page = $_GET['page'];
  $_SESSION['page'] = $_GET['page'];
  $offset = ($current_page - 1) * $limit;

  $cond = "";
  $field = isset($_GET['field']) ? $_GET['field'] : "";
  $condition = isset($_GET['condition']) ? $_GET['condition'] : "";
  $field2 = isset($_GET['field2']) ? $_GET['field2'] : "";
  $condition2 = isset($_GET['condition2']) ? $_GET['condition2'] : "";
  if (!empty($field) && !empty($condition && $field != "brand_name" && $field != "size")) {
    $cond = "p.$field = " . "'$condition'";
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND $cond");
    if (isset($_GET['sort']) && ($_GET['sort'] != "")) {
      $cond = "p.$field <> " . "'$condition'";
    }
  }
  if ($field == "size") {
    $cond = "$field = " . "'$condition'";
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb, product_size ps WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND p.id_pro = ps.id_pro AND $cond");
  }
  if ($field == "brand_name") {
    $cond = "$field = " . "'$condition'";
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND $field = '$condition'");
  }
  if ($field == "price_sale") {
    if (isset($_GET['sort']) && ($_GET['sort'] != "")) {
      $cond = "p.$field <> " . "'$condition'";
    }
    $cond =  "p.$field <> " . "'$condition'";
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND $field <> '$condition'");
  }
  if ($field == "price" && $field2 == "price") {
    $cond = "$field >= " . "'$condition'" . " AND $field2 <= " . "'$condition2'";
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND $cond");
  }
  if (!empty($field2) && !empty($condition2) && $field != "size" && $field != "brand_name" && $field != "price") {
    $cond = "p.$field = " . "'$condition'" . " AND p.$field2 = " . "'$condition2'";
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND p.$field = '$condition' AND p.$field2 = '$condition2'");
  }
  // $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND p.$field = '$condition'");
  $_SESSION['total_pages'] = ceil($total_pro / $limit);
  $sql = "SELECT * FROM product p, product_color pc, product_size ps, product_brand pb, category ca WHERE p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND p.id_brand = pb.id_brand AND p.id_cate = ca.id_cate AND color <> '' AND size <> '' AND $cond GROUP BY p.id_pro, p.pro_name ORDER BY p.id_pro DESC LIMIT $limit OFFSET $offset";
  $list_pro_condition = pdo_query($sql);
  return $list_pro_condition;
}

function listProductsFieldConditionsSort($field, $condition, $field2, $condition2, $sort_field, $sort, $limit)
{
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
  }
  $current_page = $_GET['page'];
  $_SESSION['page'] = $_GET['page'];
  $offset = ($current_page - 1) * $limit;

  $cond = "";
  $field = isset($_GET['field']) ? $_GET['field'] : "";
  $condition = isset($_GET['condition']) ? $_GET['condition'] : "";
  $field2 = isset($_GET['field2']) ? $_GET['field2'] : "";
  $condition2 = isset($_GET['condition2']) ? $_GET['condition2'] : "";
  $sort = isset($_GET['sort']) ? $_GET['sort'] : "";
  $sort_field = isset($_GET['sort_field']) ? $_GET['sort_field'] : "";
  if (!empty($field) && !empty($condition) && !empty($sort) && $field != "brand_name" && $field != "size") {
    $cond = "p.$field = " . "'$condition'";
    $orderBy = "ORDER BY `p`.`" . $sort_field . "` " . $sort;
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND p.$field = '$condition'");
  }
  if ($field == "brand_name") {
    $cond = "$field = " . "'$condition'";
    $orderBy = "ORDER BY `p`.`" . $sort_field . "` " . $sort;
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND $field = '$condition'");
  }
  if ($field == "size") {
    $cond = "$field = " . "'$condition'";
    $orderBy = "ORDER BY `p`.`" . $sort_field . "` " . $sort;
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb, product_size ps WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND p.id_pro = ps.id_pro AND $field = '$condition'");
  }
  if ($field == "price_sale") {
    $cond =  "p.$field <> " . "'$condition'";
    $orderBy = "ORDER BY `p`.`" . $sort_field . "` " . $sort;
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND $field <> '$condition'");
  }
  if (!empty($field2) && !empty($condition2)) {
    $cond = "p.$field = " . "'$condition'" . " AND p.$field2 = " . "'$condition2'";
    $orderBy = "ORDER BY `p`.`" . $sort_field . "` " . $sort;
    $total_pro = pdo_query_value("SELECT count(*) FROM product p, category ca, product_brand pb WHERE p.id_cate = ca.id_cate AND p.id_brand = pb.id_brand AND 
    $field = '$condition' AND p.$field2 = '$condition2'");
  }
  $_SESSION['total_pages'] = ceil($total_pro / $limit);
  $sql = "SELECT * FROM product p, product_color pc, product_size ps, product_brand pb, category ca WHERE p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND p.id_brand = pb.id_brand AND p.id_cate = ca.id_cate AND color <> '' AND size <> '' AND $cond GROUP BY p.id_pro, p.pro_name $orderBy LIMIT $limit OFFSET $offset";
  $list_pro_condition = pdo_query($sql);
  // var_dump($sql);
  return $list_pro_condition;
}

function listProductNew()
{
  $sql = "SELECT * FROM product p, product_color pc, product_size ps, product_brand pb WHERE p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND p.id_brand = pb.id_brand AND color <> '' AND size <> '' AND special = 1 GROUP BY p.id_pro, p.pro_name ORDER BY p.id_pro DESC LIMIT 0,12";
  $list_pro_new = pdo_query($sql);
  return $list_pro_new;
}

function listProductFeature()
{
  $sql = "SELECT * FROM product p, product_color pc, product_size ps, product_brand pb WHERE p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND p.id_brand = pb.id_brand AND color <> '' AND size <> '' GROUP BY p.id_pro, p.pro_name ORDER BY views DESC LIMIT 0,12";
  $list_pro_feature = pdo_query($sql);
  return $list_pro_feature;
}

function listProductPromo()
{
  $sql = "SELECT * FROM product p, product_color pc, product_size ps, product_brand pb WHERE p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND p.id_brand = pb.id_brand AND color <> '' AND size <> '' AND price_sale <> 0 GROUP BY p.id_pro, p.pro_name ORDER BY p.id_pro DESC LIMIT 0,8";
  $list_pro_promo = pdo_query($sql);
  return $list_pro_promo;
}

function listBrandImage()
{
  $sql = "SELECT * FROM product_brand WHERE logo <> ''";
  $list_brand = pdo_query($sql);
  return $list_brand;
}

function listBrand()
{
  $sql = "SELECT * FROM product_brand ORDER BY brand_name ASC";
  $list_brand = pdo_query($sql);
  return $list_brand;
}

function productDetail($id_pro)
{
  // $sql = "SELECT * FROM product p, product_brand pb WHERE p.id_brand = pb.id_brand AND id_pro = $id_pro";
  $sql = "SELECT * FROM product p, product_brand pb, product_color pc, product_size ps WHERE p.id_brand = pb.id_brand AND p.id_pro = pc.id_pro AND p.id_pro = ps.id_pro AND p.id_pro = $id_pro";
  $product = pdo_query_one($sql);
  return $product;
}

function productDetailColor($id_pro)
{
  $sql = "SELECT * FROM product p, product_color pc WHERE p.id_pro = pc.id_pro AND p.id_pro = $id_pro";
  $product_color = pdo_query_one($sql);
  return $product_color;
}

function productDetailSize($id_pro)
{
  $sql = "SELECT * FROM product p, product_size ps WHERE p.id_pro = ps.id_pro AND p.id_pro = $id_pro GROUP BY ps.id_pro, ps.size";
  $product_size = pdo_query($sql);
  return $product_size;
}

function productDetailImage($id_pro)
{
  $sql = "SELECT * FROM product p, product_detail_img pdi WHERE p.id_pro = pdi.id_pro AND p.id_pro = $id_pro ORDER BY pro_detail_image ASC";
  $product_detail_img = pdo_query($sql);
  return $product_detail_img;
}

function productRelate($id_pro, $id_cate)
{
  $sql = "SELECT * FROM product p, product_brand pb WHERE p.id_brand = pb.id_brand AND id_cate = $id_cate AND id_pro <> $id_pro ORDER BY id_pro DESC LIMIT 0,12";
  $list_pro_relate = pdo_query($sql);
  return $list_pro_relate;
}

function updateViews($id_pro)
{
  $sql = "UPDATE product SET views = views + 1 WHERE id_pro = $id_pro";
  pdo_execute($sql);
}

// Admin Side View
function addProductAdmin($pro_name, $image, $price, $price_sale, $special, $gender, $description, $id_cate, $id_brand)
{
  $sql = "INSERT INTO product(pro_name, image, price, price_sale, special, gender, description, id_cate, id_brand) VALUES('$pro_name', '$image', '$price', '$price_sale', '$special', '$gender', '$description', '$id_cate', '$id_brand')";
  pdo_execute($sql);
}

function addProductColor($color, $id_pro)
{
  $sql = "INSERT INTO product_color(color, id_pro) VALUES('$color', '$id_pro')";
  pdo_execute($sql);
}

function addProductSize($size, $id_pro)
{
  $sql = "INSERT INTO product_size(size, id_pro) VALUES('$size', '$id_pro')";
  pdo_execute($sql);
}

function addProductDetailImg($pro_detail_image, $id_pro)
{
  $sql = "INSERT INTO product_detail_img(pro_detail_image, id_pro) VALUES('$pro_detail_image', '$id_pro')";
  pdo_execute($sql);
}

function updateProductAdmin($id_pro, $pro_name, $image, $price, $price_sale, $special, $gender, $description, $id_cate, $id_brand)
{
  if ($image != "") {
    $sql = "UPDATE product SET pro_name = '$pro_name', image = '$image', price = '$price', price_sale = '$price_sale', special = '$special', gender = '$gender', description = '$description', id_cate = '$id_cate', id_brand = '$id_brand' WHERE id_pro = '$id_pro'";
  } else {
    $sql = "UPDATE product SET pro_name = '$pro_name', price = '$price', price_sale = '$price_sale', special = '$special', gender = '$gender', description = '$description', id_cate = '$id_cate', id_brand = '$id_brand' WHERE id_pro = '$id_pro'";
  }
  pdo_execute($sql);
}

function updateProductSize($id_pro_size, $size, $id_pro)
{
  $sql = "UPDATE product_size SET size = '$size', id_pro = '$id_pro' WHERE id_pro_size = '$id_pro_size'";
  pdo_execute($sql);
}

function updateProductColor($id_pro_color, $color, $id_pro)
{
  $sql = "UPDATE product_color SET color = '$color', id_pro = '$id_pro' WHERE id_pro_color = '$id_pro_color'";
  pdo_execute($sql);
}

function updateProductDetailColor($id_pro_detail_img, $pro_detail_image, $id_pro)
{
  if ($pro_detail_image != "") {
    $sql = "UPDATE product_detail_img SET pro_detail_image = '$pro_detail_image', id_pro = '$id_pro' WHERE id_pro_detail_img = '$id_pro_detail_img'";
  } else {
    $sql = "UPDATE product_detail_img SET id_pro = '$id_pro' WHERE id_pro_detail_img = '$id_pro_detail_img'";
  }
  pdo_execute($sql);
}

function deleteProductAdmin($id_pro)
{
  $sql = "DELETE FROM product WHERE id_pro = $id_pro";
  pdo_execute($sql);
}

function deleteProductSize($id_pro_size)
{
  $sql = "DELETE FROM product_size WHERE id_pro_size = $id_pro_size";
  pdo_execute($sql);
}

function deleteProductColor($id_pro_color)
{
  $sql = "DELETE FROM product_color WHERE id_pro_color = $id_pro_color";
  pdo_execute($sql);
}

function deleteProductDetailImg($id_pro_detail_img)
{
  $sql = "DELETE FROM product_detail_img WHERE id_pro_detail_img = $id_pro_detail_img";
  pdo_execute($sql);
}

function listProductAdmin()
{
  $sql = "SELECT * FROM product ORDER BY id_pro DESC";
  $list_pro = pdo_query($sql);
  return $list_pro;
}

function listProductAdmin2($order, $limit)
{
  if (!isset($_GET['page'])) {
    $_SESSION['page'] = 1;
  }
  if (!isset($_SESSION['total_page'])) {
    $_SESSION['total_page'] = 1;
  }
  $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM product");
  if (isset($_GET['page'])) {
    $_SESSION['page'] = $_GET['page'];
  }
  $begin = ($_SESSION['page'] - 1) * $limit;
  $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
  $sql = "SELECT * FROM product p, product_brand pb WHERE p.id_brand = pb.id_brand ORDER BY $order DESC LIMIT $begin, $limit";
  return pdo_query($sql);
}

function listProductsSize($order, $limit)
{
  if (!isset($_GET['page'])) {
    $_SESSION['page'] = 1;
  }
  if (!isset($_SESSION['total_page'])) {
    $_SESSION['total_page'] = 1;
  }
  $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM product");
  if (isset($_GET['page'])) {
    $_SESSION['page'] = $_GET['page'];
  }
  $begin = ($_SESSION['page'] - 1) * $limit;
  $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
  $sql = "SELECT p.id_pro, p.pro_name, COUNT(*) quantity, MIN(ps.size) size_min, MAX(ps.size) size_max FROM product p, product_size ps WHERE p.id_pro = ps.id_pro GROUP BY p.id_pro, p.pro_name HAVING quantity > 0 ORDER BY p.$order DESC LIMIT $begin, $limit";
  $list_pro_size = pdo_query($sql);
  return $list_pro_size;
}

function detailProductSize($id_pro)
{
  $sql = "SELECT * FROM product p, product_size ps WHERE p.id_pro = ps.id_pro AND ps.id_pro = $id_pro ORDER BY size";
  $list_detail_size = pdo_query($sql);
  return $list_detail_size;
}

function listProductsColor($order, $limit)
{
  if (!isset($_GET['page'])) {
    $_SESSION['page'] = 1;
  }
  if (!isset($_SESSION['total_page'])) {
    $_SESSION['total_page'] = 1;
  }
  $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM product");
  if (isset($_GET['page'])) {
    $_SESSION['page'] = $_GET['page'];
  }
  $begin = ($_SESSION['page'] - 1) * $limit;
  $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
  $sql = "SELECT p.id_pro, p.pro_name, pc.*, COUNT(*) quantity FROM product p, product_color pc WHERE p.id_pro = pc.id_pro GROUP BY p.id_pro, p.pro_name HAVING quantity > 0 ORDER BY p.$order DESC LIMIT $begin, $limit";
  $list_pro_size = pdo_query($sql);
  return $list_pro_size;
}

function detailProductColor($id_pro)
{
  $sql = "SELECT * FROM product p, product_color pc WHERE p.id_pro = pc.id_pro AND pc.id_pro = $id_pro ORDER BY color";
  $list_detail_color = pdo_query($sql);
  return $list_detail_color;
}

function listProductsDetailImg($order, $limit)
{
  if (!isset($_GET['page'])) {
    $_SESSION['page'] = 1;
  }
  if (!isset($_SESSION['total_page'])) {
    $_SESSION['total_page'] = 1;
  }
  $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM product");
  if (isset($_GET['page'])) {
    $_SESSION['page'] = $_GET['page'];
  }
  $begin = ($_SESSION['page'] - 1) * $limit;
  $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
  $sql = "SELECT p.id_pro, p.pro_name, pdi.*, COUNT(*) quantity FROM product p, product_detail_img pdi WHERE p.id_pro = pdi.id_pro GROUP BY p.id_pro, p.pro_name HAVING quantity > 0 ORDER BY p.$order DESC LIMIT $begin, $limit";
  $list_pro_size = pdo_query($sql);
  return $list_pro_size;
}

function detailProductDetailImg($id_pro)
{
  $sql = "SELECT * FROM product p, product_detail_img pdi WHERE p.id_pro = pdi.id_pro AND pdi.id_pro = $id_pro ORDER BY pro_detail_image";
  $list_detail_image = pdo_query($sql);
  return $list_detail_image;
}

function getProductById($id_pro)
{
  $sql = "SELECT * FROM product WHERE id_pro = '$id_pro'";
  $product = pdo_query_one($sql);
  return $product;
}

function getProductSize($id_pro_size)
{
  $sql = "SELECT * FROM product_size WHERE id_pro_size = '$id_pro_size'";
  $product_size = pdo_query_one($sql);
  return $product_size;
}

function getProductColor($id_pro_color)
{
  $sql = "SELECT * FROM product_color WHERE id_pro_color = '$id_pro_color'";
  $product_color = pdo_query_one($sql);
  return $product_color;
}

function getProductDetailImg($id_pro_detail_img)
{
  $sql = "SELECT * FROM product_detail_img WHERE id_pro_detail_img = '$id_pro_detail_img'";
  $product_detail_image = pdo_query_one($sql);
  return $product_detail_image;
}
