<?php 
  include_once 'core/system.php';
  $cname = $_GET["c"] ?? 'index';
  $path = "controllers/$cname.php";
  $pageTitle = 'Ошибка 404';
  $pageContent = '';

  if (file_exists($path) && preg_match("/^[a-z0-9-]/",$cname )) {
    include_once($path);
  }else {  
    $pageContent = template('errors/v_404');
    header('HTTP/1.1 404 Not Found');
  }
  $html = template('base/v_main', [
    'title' => $pageTitle, 
    'content' => $pageContent
  ]);
  echo $html;