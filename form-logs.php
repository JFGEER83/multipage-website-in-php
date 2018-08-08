<?php
$file = file_get_contents('./logs/logs.txt', true);
$file = rtrim(trim($file), ',');
$file = '[' . $file . ']';
$log = json_decode($file, true);
var_dump($log);
foreach ($log as $key => $value) {
  echo '<pre>';
  echo $log[$key]['date'];
  echo '<br>';
  echo $log[$key]['first_name'];
  echo '<br>';
  echo $log[$key]['format'];
  echo '</pre>';
}

 ?>
