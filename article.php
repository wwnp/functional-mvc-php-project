<?php 
  include_once 'functions.php';
  include_once 'model/logging.php';
  addLogVisit();
  $articles = getArticles();
  $id = (int) $_GET["id"] ?? '';
  echo $id;
  $post = $articles[$id];
?>
<div>
  <? if($post): ?>
    <h1><?= $post["title"] ?></h1>
    <p><?= $post["content"] ?></p>
    <a href="edit.php?id=<?= $id ?>">Edit</a>
    <a href="delete.php?id=<?= $id ?>" style="color:red;">Delete</a>
  <? else: ?>
    <h1>Page not found</h1>
    <a href="index.php">Home</a>
  <? endif; ?>
</div>