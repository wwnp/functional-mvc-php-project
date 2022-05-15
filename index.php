<?php 
  include_once('core/system.php');

  $c = $_GET['c'] ?? 'index';
  $path = "controllers/{$c}.php";
  $pageTitle = '';
  $pageContent = '';

  if(file_exists($path) ){
    include($path);
  }
  else {
    $pageTitle = '404';
    $pageContent = template('404');
  }
  $html = template('v_main', [
    'title' => $pageTitle,
    'content' => $pageContent,
  ]);
  echo $html;
?>