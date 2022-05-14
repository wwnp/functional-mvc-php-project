<?php 
  include_once('model/articles.php');
  deleteArticle($_GET['id']);
  header("location: index.php");
  exit();
?>