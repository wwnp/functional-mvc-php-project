<?php 
  include_once('model/db.php');
  include_once('model/articles.php');
  $articles = fetchArticles();

  $cats = fetchCats();
  echo '<pre>';
  print_r($articles);
  echo '</pre>';
  echo '<hr>';
?>
<div>
  <a href="add.php">Add article</a>
  <hr>
  <hr>
</div>
<div style="display:flex;">
  <? foreach($articles as $key => $value ): ?>
    <div style="border-right: 1px solid #ccc;padding: .5rem;">
      <p><?= $value['title'] ?></p>
      <p><?= $value['content'] ?></p>
      <p><?= $value['dt_add'] ?></p>
      <p><?= $value['catTitle'] ?></p>
      <a href="edit.php?id=<?= $value['id_article'] ?>">Edit2</a> 
      <hr>
    </div>
  <? endforeach; ?>
</div>