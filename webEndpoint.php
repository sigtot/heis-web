<?php
header('Access-Control-Allow-Origin: *');
$ordersFileName = "orders";
$modelFileName = "model";

if (!empty($_POST)) {
  // Write orders if it exists
  $ordersFile = fopen($ordersFileName, "w");
  $orders = $_POST["orders"];
  foreach ($orders as $order) {
    fwrite($ordersFile, $order);
  }
  fclose($ordersFile);
}

// Read and echo model
$data = [];
$modelFile = fopen($modelFileName, "r");
while (($line = fgets($modelFile)) !== false) {
  $data[explode(",", $line)[0]] = intval(explode(",", $line)[1]);
}
echo json_encode($data);
fclose($modelFile);
