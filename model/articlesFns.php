<?php 
  include_once('core/db.php');

  function fetchArticles() {
    $sql = "
      SELECT articles.id_article, articles.title, articles.content, articles.dt_add, cats.title as catTitle, articles.imageUrl FROM `articles` 
      LEFT JOIN cats ON  (articles.id_cat = cats.id_cat);
    ";
    $query = dbQuery($sql);
    $articles = $query->fetchAll();
    return $articles;
  }
?>