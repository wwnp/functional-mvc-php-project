<?php
$f = fopen('db.txt', 'r');
$total = 0;
$cnt = 0;
while (!feof($f)) {
  $str = rtrim(fgets($f));
  if($str !== ''){
    $total += (string) $str;
    $cnt++;
  }
}
echo memory_get_usage() . '<br>';
echo $total / $cnt;
fclose($f);