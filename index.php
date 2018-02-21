<?php
  if (!empty($_POST)) {
    // Write data if it exists
    $modelFile = fopen("model", "w");
    $direction = $_POST["direction"];
    $moving = $_POST["moving"];
    $currentFloor = $_POST["current_floor"];
    $lastFloor = $_POST["last_floor"];
    $doorOpen = $_POST["door_open"];

    fwrite($modelFile, $direction . "\n");
    fwrite($modelFile, $moving . "\n");
    fwrite($modelFile, $currentFloor . "\n");
    fwrite($modelFile, $lastFloor . "\n");
    fwrite($modelFile, $doorOpen . "\n");

    fclose($modelFile);
  } else {
    // Read and echo data
    $modelFile = fopen("model", "r");
    while (($line = fgets($modelFile)) !== false) {
      echo $line;
    }
    fclose($modelFile);
  }
