<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;

require_once "pdo.php";

require_once "../carbon/autoload.php";


if (isset($_GET['thoigian'])) {
  $thoigian = $_GET['thoigian'];
} else {
  $thoigian = '';
  $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
}

if ($thoigian == '7ngay') {
  $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
} else if ($thoigian == '28ngay') {
  $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(28)->toDateString();
} else if ($thoigian == '90ngay') {
  $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(90)->toDateString();
} else if ($thoigian == '365ngay') {
  $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
}

$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

$sql = "SELECT * FROM stat WHERE orders_date BETWEEN '$subdays' AND '$now' ORDER BY orders_date ASC";
$sql_query = pdo_query($sql);

foreach ($sql_query as $sl) {
  $chart_data[] = array(
    'date' => $sl['orders_date'],
    'order' => $sl['orders'],
    'sales' => $sl['revenue'],
    'quantity' => $sl['quantity_sold']
  );
}

echo $data = json_encode($chart_data);
