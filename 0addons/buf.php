<?php 
  ob_start();
  echo 1;
  $res = ob_get_clean();
  echo '<pre>';
  print_r($res);
  echo '</pre>';
  echo '<hr>';