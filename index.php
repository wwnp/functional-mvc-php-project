<?php
include_once 'functions.php';
$articles = getArticles();
?>
<a href="add.php">Add article</a>
<div class='articles'>
  <?foreach ($articles as $key => $value): ?>
    <div class='article'>
      <h4><?=$value['title']?></h4>
      <a href="article.php?id=<?=$value['id']?>">Read More</a>
    </div>
  <?endforeach;?>
</div>