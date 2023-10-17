<?php
require_once "pdo.php";

function listCategory()
{
  $sql = "SELECT * FROM category";
  $list_cate = pdo_query($sql);
  return $list_cate;
}

function addCategory($cate_name)
{
  $sql = "INSERT INTO category(cate_name) VALUES('$cate_name')";
  pdo_execute($sql, $cate_name);
}

function getCategoryById($id_cate)
{
  $sql = "SELECT * FROM category WHERE id_cate = $id_cate";
  $category = pdo_query_one($sql);
  return $category;
}

function updateCategory($id_cate, $cate_name)
{
  $sql = "UPDATE category SET cate_name = '$cate_name' WHERE id_cate = $id_cate";
  pdo_execute($sql);
}

function deleteCategory($id_cate)
{
  $sql = "DELETE FROM category WHERE id_cate = $id_cate";
  pdo_execute($sql);
}
