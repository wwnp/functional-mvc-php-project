<?php 
  include_once('model/articles.php');
  include_once('model/cats.php');

  $articles = fetchArticles();

  $cats = fetchCats();
  $isTable = ($_GET['view'] ?? '') === 'table';
  $template = $isTable ? 'v_index_table' : 'v_index';
  include("views/$template.php")
?>