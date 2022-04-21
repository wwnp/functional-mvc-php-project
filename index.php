<?php
include_once('function.php');
$articles = getArts();

?>
<div>
  <? foreach ($articles as $key => $value) : ?>

  <div class="article">
    <h2><?= $value['id'] ?><?= $value['name'] ?></h2>
    <a href="article.php?id=<?= $value['id'] ?>">Read more</a>
  </div>

  <? endforeach ?>
</div>