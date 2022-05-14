<?php 
  include_once('core/db.php');

  function fetchArticles() {
    $sql = "
      SELECT articles.id_article, articles.title, articles.content, articles.dt_add, cats.title as catTitle FROM `articles` 
      LEFT JOIN cats ON  (articles.id_cat = cats.id_cat);
    ";
    $query = dbQuery($sql);
    $articles = $query->fetchAll();
    return $articles;
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

  function deleteArticle($id) {
    echo "123";
    $sql = "
      DELETE FROM `articles`
      WHERE id_article={$id};
    ";
    $query = dbQuery($sql);
    
    return true;
  }

  function validateFields(array &$fields): array {
    $errors = [];

    if ($fields['title'] === ''  ) { 
      $errors[] = 'fill title';
    }
    if ($fields['content'] === ''  ) { 
      $errors[] = 'fill content';
    }
    if (mb_strlen($fields['title'], 'UTF-8') < 2  )   { 
      $errors[] = 'more 2';
    }
    if (mb_strlen($fields['content'], 'UTF-8') < 3  )   {   
      $errors[] = 'more 3';
    }
    $fields['title'] = htmlspecialchars($fields['title']);
    $fields['content'] = htmlspecialchars($fields['title']);
    return $errors;
  }
  // or 
  // function prepareFieldsRemoveHTML(array $fields): array {
  //   $fields['title'] = htmlspecialchars($fields['title']);
  //   $fields['content'] = htmlspecialchars($fields['content']);
  //   return $fields;
  // }
?>