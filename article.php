<?php

include_once 'functions.php';
$articles = getArticles();

$id = (int) $_GET["id"] ?? '';
$post = $articles[$id] ?? null;
$hasPost = $post ?? null;
?>
<div class="content">
  <?if ($hasPost): ?>
    <h1><?=$post['title']?></h1>
    <div><?=$post['content']?></div>
    <hr>
    <a href="delete.php?id=<?=$id?>">Remove</a>
  <?else: ?>
    <div class="e404">
      <h1>Страница не найдена!</h1>
    </div>
  <?endif?>
</div>
<hr>
<a href="index.php">Main page</a>