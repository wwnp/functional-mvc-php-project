<?php 
  include_once('model/articles.php');
  $id = $_GET['id'] ?? '';
  $article = fetchArticle($id);
  if($article){
    $article = $article[0];
    
    $pageTitle = $article['title'];
    $pageContent = template('v_article', [
      'title' => $article['title'],
      'content' => $article['content']
    ]);
  }else {
    $pageContent = template('errors/v_404');
    header('HTTP/1.1 404 Not Found');
  }
?>