<?php 
  include_once('db.php');

  function fetchArticles() {
    $sql = "
      SELECT articles.id_article, articles.title, articles.content, articles.dt_add, cats.title as catTitle FROM `articles` 
      LEFT JOIN cats ON  (articles.id_cat = cats.id_cat);
    ";
    $query = dbQuery($sql);
    $articles = $query->fetchAll();
    return $articles;
  }

  function fetchCats() {
    $sql = "
      SELECT * from cats;
    ";
    $query = dbQuery($sql);
    $cats = $query->fetchAll();
    return $cats;
  }

  function addArticle($params) {
    $sql = "
      INSERT INTO `articles` (`title`, `content`, `id_cat`)
      VALUES (:title, :content, :id_cat);
    ";
    $query = dbQuery($sql,$params);
    return true;
  }

  function updateArticle($id,$params) {
    $sql = "
      UPDATE `articles` SET 
      `title` = :title,
      `content` = :content,
      `id_cat` = :id_cat
      WHERE id_article={$id};
    ";
    $query = dbQuery($sql,$params);
    return true;
  }

  function fetchArticle($id) {
    $sql = "
      SELECT * from `articles`
      WHERE id_article = {$id};
    ";
    $query = dbQuery($sql);
    $article = $query->fetchAll();
    return $article;
    }
?>