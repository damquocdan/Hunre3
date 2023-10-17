<?php

function insertOrder($id_bill, $total_order, $payment, $id_user, $date, $note,  $order_name, $order_address, $order_email, $order_phone)
{
  $sql = "INSERT INTO `order`(id_bill, total_order, payment, id_user, date, note, order_name, order_address, order_email, order_phone) VALUES('$id_bill', '$total_order', '$payment', '$id_user', '$date', '$note', '$order_name', '$order_address', '$order_email', '$order_phone')";
  return pdo_execute_lastInsertId($sql);
}

function insertOrderTotal($id_order, $id_pro, $quantity, $price, $name, $image, $size, $color)
{
  $sql = "INSERT INTO `order_total`(id_order, id_pro, quantity, price, name, image, size, color) VALUES('$id_order', '$id_pro', '$quantity', '$price', '$name', '$image', '$size', '$color')";
  pdo_execute($sql);
}


function showOrderDetail($id_order)
{
  $sql = "SELECT * FROM `order_total` WHERE id_order = '$id_order'";
  $listCart = pdo_query($sql);
  return $listCart;
}

function showOrder($id_order)
{
  $sql = "SELECT * FROM `order` WHERE id_order = '$id_order'";
  $list_order = pdo_query($sql);
  return $list_order;
}

function showOrder2($id_order)
{
  $sql = "SELECT * FROM `order` WHERE id_order = '$id_order'";
  $list_order = pdo_query_one($sql);
  return $list_order;
}

function showOrder3($id_bill)
{
  $sql = "SELECT * FROM `order` WHERE id_bill = '$id_bill'";
  $list_order = pdo_query_one($sql);
  return $list_order;
}

function showAllOrder($id_user)
{
  $sql = "SELECT * FROM `order` WHERE 1";
  if ($id_user > 0) {
    $sql .= " AND id_user = '$id_user' ORDER BY date DESC";
  } else {
    $sql .= " ORDER BY id_order DESC";
  }
  $list_order = pdo_query($sql);
  return $list_order;
}

function showAllOrderUnFullFill()
{
  $sql = "SELECT * FROM `order` WHERE status = 0 ORDER BY date DESC";
  $list_order = pdo_query($sql);
  return $list_order;
}

function showAllOrderDelivered()
{
  $sql = "SELECT * FROM `order` WHERE status = 3 ORDER BY date DESC";
  $list_order = pdo_query($sql);
  return $list_order;
}

function showAllOrderProcessing()
{
  $sql = "SELECT * FROM `order` WHERE status = 1 ORDER BY date DESC";
  $list_order = pdo_query($sql);
  return $list_order;
}

function showAllOrderDelivering()
{
  $sql = "SELECT * FROM `order` WHERE status = 2 ORDER BY date DESC";
  $list_order = pdo_query($sql);
  return $list_order;
}

function detailOrderTotal($id_order)
{
  $sql = "SELECT * FROM `order_total` WHERE id_order = $id_order";
  $order_total = pdo_query_one($sql);
  return $order_total;
}

function countOrderTotal($id_order)
{
  $sql = "SELECT * FROM `order_total` WHERE id_order = $id_order";
  $order = pdo_query($sql);
  return sizeof($order);
}

function updateOrderAdmin($id_order, $status)
{
  $sql = "UPDATE `order` SET `status` = '$status' WHERE `order`.`id_order` = '$id_order'";
  pdo_execute($sql);
}

function deleteOrderUser($id_order)
{
  $sql = "DELETE FROM `order` WHERE id_order = '$id_order'";
  pdo_execute($sql);
}

function deleteOrderAdmin($id_order)
{
  $sql = "DELETE FROM `order` WHERE id_order = '$id_order'";
  pdo_execute($sql);
}

function deleteOrderTotalAdmin($id_order_total)
{
  $sql = "DELETE FROM `order_total` WHERE id_order_total = '$id_order_total'";
  pdo_execute($sql);
}

function getUserOrderById($id_order)
{
  $sql = "SELECT * FROM `order` WHERE id_order = '$id_order'";
  $user_order = pdo_query_one($sql);
  return $user_order;
}

function getUserOrderTotalById($id_order)
{
  $sql = "SELECT * FROM `order_total` WHERE id_order = '$id_order'";
  $user_order_total = pdo_query($sql);
  return $user_order_total;
}

function insertOrderVnPay($vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_CardType, $vnp_OrderInfo, $vnp_PayDate, $vnp_TransactionNo, $id_bill)
{
  $sql_insert_vnpay = "INSERT INTO vnpay(vnp_amount, vnp_bankcode, vnp_banktranno, vnp_cardtype, vnp_orderinfo, vnp_paydate, vnp_transactionno, id_bill) VALUES ('$vnp_Amount', '$vnp_BankCode', '$vnp_BankTranNo', '$vnp_CardType', '$vnp_OrderInfo', '$vnp_PayDate', '$vnp_TransactionNo', '$id_bill')";
  pdo_execute($sql_insert_vnpay);
}

function insertOrderMoMo($partnerCode, $orderId, $amount, $orderInfo, $orderType, $transId, $payType, $id_bill)
{
  $sql_insert_momo = "INSERT INTO momo(partner_code, order_id, amount, order_info, order_type, trans_id, pay_type, id_bill) VALUES ('$partnerCode', '$orderId', '$amount', '$orderInfo', '$orderType', '$transId', '$payType', '$id_bill')";
  pdo_execute($sql_insert_momo);
}

function checkOrderVnpay($id_bill)
{
  $sql = "SELECT * FROM `order`, vnpay WHERE `order`.`id_bill` = vnpay.id_bill AND vnpay.id_bill = '$id_bill'";
  $user_account = pdo_query_one($sql);
  return $user_account;
}
