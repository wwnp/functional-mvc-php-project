<?php 
  include_once('model/articles.php');
  include_once('model/cats.php');

  $articles = fetchArticles();
  if($articles){
    $cats = fetchCats();
    $isTable = ($_GET['view'] ?? '') === 'table';
    $template = $isTable ? 'v_index_table' : 'v_index';
    $pageTitle = 'Статьи';
    $pageContent = template($template , [
      'articles' => $articles
    ]);
  }else{
    $pageContent = template('errors/v_404');
    header('HTTP/1.1 404 Not Found');
  }

?>