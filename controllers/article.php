<?php 
  include_once('model/articles.php');
  $id = $_GET['id'] ?? '';
  $article = fetchArticle($id);
  if($article){
    include('views/v_article.php');
  }else {
    header('HTTP/1.1 404 Not Found');
    include('views/errors/v_404.php');
  }
?>