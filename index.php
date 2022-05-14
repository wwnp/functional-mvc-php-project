<?php 
  $cname = $_GET["c"] ?? 'index';
  $path = "controllers/$cname.php";

  if (file_exists($path) && preg_match("/^[a-z0-9-]/",$cname )) {
    include_once($path);
  }else {
    header('HTTP/1.1 404 Not Found');
    include('views/errors/v_404.php');
  }
?>