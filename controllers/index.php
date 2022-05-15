<?php 
  include_once('model/articlesFns.php');
  $articles = fetchArticles();
  if($articles){
    $pageTitle = 'Статьи';
    $pageContent = template('v_index', [
      'articles' => $articles
    ]);
  }else{
    $pageTitle = '404';
    $pageContent = template('v_404');
  }
?>