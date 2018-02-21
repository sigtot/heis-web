<?php
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

  // Echo the lines in $modelFile
  while (($line = fgets($modelFile)) !== false) {
    echo $line;
  }
