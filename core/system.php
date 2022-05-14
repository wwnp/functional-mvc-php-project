<?php 
  function template(string $path, array $vars = []):string {
    $systemFullPath = "views/{$path}.php";
    extract($vars);
    ob_start();
    include($systemFullPath);
    return ob_get_clean();
  }
?>