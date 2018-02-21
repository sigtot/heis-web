<?php
  $modelFile = fopen("model", "w");

  // Write data if it exists
  if (!empty($_POST)) {
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
  }

  // Read and echo data in $modelFile
  while (($line = fgets($modelFile)) !== false) {
    echo $line;
  }
