<?php
require_once "pdo.php";

// use Carbon\Carbon;
// use Carbon\CarbonInterval;

// require_once "../carbon/autoload.php";

function listStatProduct()
{
  $sql = "SELECT ca.id_cate, ca.cate_name, COUNT(*) quantity, MIN(p.price) low_price, MAX(p.price) max_price, AVG(p.price) avg_price FROM product p, category ca WHERE p.id_cate = ca.id_cate GROUP BY ca.id_cate, ca.cate_name";
  $list_stat_pro = pdo_query($sql);
  return $list_stat_pro;
}

// $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

// $sql_list_order = "SELECT *, SUM(quantity) quantity_sold, SUM(price) revenue FROM `order`, `order_total` WHERE `order`.`id_order` = `order_total`.`id_order` AND status = 2 OR status = 3 GROUP BY id_bill, `order`.`id_order`";
// $list_order = pdo_query($sql_list_order);

// $sql_stat = "SELECT * FROM stat WHERE orders_date = '$now'";
// $list_stat = pdo_query($sql_stat);

// $quantity_buy = 0;
// $revenue = 0;
// foreach ($list_order as $lo) {
//   $quantity_buy += $lo['quantity_sold'];
//   $revenue += $lo['revenue'];

//   if (count($list_stat) == 0) {
//     $quantity_sold = $quantity_buy;
//     $revenue = $revenue;
//     $orders = 1;
//     $sql_update_stat = "INSERT INTO stat(orders_date, orders, revenue, quantity_sold) VALUES('$now', '$orders', '$revenue', '$quantity_sold')";
//     pdo_execute($sql_update_stat);
//   } else if (count($list_stat) != 0) {
//     foreach ($list_stat as $lt) {
//       $quantity_sold = $lt['quantity_sold'] + $quantity_sold;
//       $revenue = $lt['revenue'] + $revenue;
//       $orders = $lt['orders'] + 1;
//       $sql_update_stat = "UPDATE stat SET orders = '$orders', revenue = '$revenue', quantity_sold = '$quantity_sold' WHERE orders_date = '$now'";
//       pdo_execute($sql_update_stat);
//     }
//   }
// }
