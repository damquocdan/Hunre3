<?php
require_once "pdo.php";

function addComment($content, $date, $rate, $id_pro, $id_user)
{
  $sql = "INSERT INTO comment(content, date, rate, id_pro, id_user) VALUES('$content', '$date', '$rate', '$id_pro', '$id_user')";
  pdo_execute($sql);
}

function getCommentByIdPro($id_pro)
{
  $sql = "SELECT cm.*, p.pro_name, u.id_user, u.image FROM comment cm JOIN product p ON cm.id_pro = p.id_pro JOIN user u ON u.id_user = cm.id_user WHERE cm.id_pro = $id_pro ORDER BY id_comment DESC";
  $list_comment = pdo_query($sql);
  return $list_comment;
}

function listComment()
{
  $sql = "SELECT * FROM comment ORDER BY date DESC";
  $list_comment = pdo_query($sql);
  return $list_comment;
}

function listCommentAdmin()
{
  $sql = "SELECT p.id_pro, p.pro_name, COUNT(*) quantity, MIN(cm.date) oldest_date, MAX(cm.date) newest_date FROM comment cm, product p WHERE cm.id_pro = p.id_pro GROUP BY p.id_pro, p.pro_name HAVING quantity > 0";
  $list_comment = pdo_query($sql);
  return $list_comment;
}

function deleteComment($id_comment)
{
  $sql = "DELETE FROM comment WHERE id_comment = $id_comment";
  $list_comment = pdo_query($sql);
  return $list_comment;
}
