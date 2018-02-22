<?php
header('Access-Control-Allow-Origin: *');
$ordersFileName = "orders";
if (!empty($_POST)) {
  // Write data if it exists
  $ordersFile = fopen($ordersFileName, "w");
  $orders = $_POST["orders"];
  foreach ($orders as $order) {
    fwrite($ordersFile, $order);
  }
  fclose($ordersFile);
} else {
  // Read and echo data
  echo file_get_contents($ordersFileName);
}

