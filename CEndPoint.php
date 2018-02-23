<?php
header('Access-Control-Allow-Origin: *');
$ordersFileName = "orders";
$modelFileName = "model";

if (!empty($_POST)) {
  // Write model if it exists
  $modelFile = fopen($modelFileName, "w");
  $direction = $_POST["direction"];
  $moving = $_POST["moving"];
  $currentFloor = $_POST["current_floor"];
  $lastFloor = $_POST["last_floor"];
  $doorOpen = $_POST["door_open"];

  fwrite($modelFile, "direction" . "," . $direction . "\n");
  fwrite($modelFile, "moving" . "," . $moving . "\n");
  fwrite($modelFile, "current_floor" . "," . $currentFloor . "\n");
  fwrite($modelFile, "last_floor" . "," . $lastFloor . "\n");
  fwrite($modelFile, "door_open" . "," . $doorOpen . "\n");

  fclose($modelFile);
}

// Read and echo orders
echo file_get_contents($ordersFileName);
