<?php
  header('Access-Control-Allow-Origin: *');

  if (!empty($_POST)) {
    // Write data if it exists
    $modelFile = fopen("model", "w");
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
  } else {
    // Read and echo data
    $data = [];
    $modelFile = fopen("model", "r");
    while (($line = fgets($modelFile)) !== false) {
      $data[explode(",", $line)[0]] = intval(explode(",", $line)[1]);
    }
    echo json_encode($data);
    fclose($modelFile);
  }
