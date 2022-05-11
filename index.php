<?php 
  include_once('model/db.php');
  include_once('model/articles.php');
  $articles = fetchArticles();

  $cats = fetchCats();
  $isTable = ($_GET['view'] ?? '') === 'table';
  $template = $isTable ? 'v_index_table' : 'v_index';
include("views/$template.php")
?>