<?php 
  include_once 'functions.php';
  $articles = getArticles();
?>
<div>
  <? foreach($articles as $article) : ?>
    <div>
      <h1><?= $article['title'] ?></h1>
      <a href="article/id=<?= $article['id'] ?>">Read more</a>
      <hr>
    </div>
  <? endforeach; ?>
</div>
