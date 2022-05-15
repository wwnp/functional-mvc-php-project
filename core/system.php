<?php 
  function template($path, $vars = []) {
    $fullPath = "views/{$path}.php";
    extract($vars);
    ob_start();
    include($fullPath);
    return ob_get_clean();
  }
?>