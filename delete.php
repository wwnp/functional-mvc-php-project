<?php 
  // include_once('model/articles.php');
  // deleteArticle($_GET['id']);
  // header("location: index.php");
  
  $json = '{"a":1}';
  echo '<pre>';
  print_r(json_decode($json));
  echo '</pre>';
  echo '<hr>';
?>