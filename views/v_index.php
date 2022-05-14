<div>
  <a href="index.php?c=add">Add article</a>
  <a href="index.php?view=table">View as table</a>
  <hr>
</div>
<div style="display:flex;">
  <? foreach($articles as $key => $value ): ?>
    <div style="border-right: 1px solid #ccc;padding: .5rem;">
      <p><?= $value['title'] ?></p>
      <p><?= $value['content'] ?></p>
      <p><?= $value['dt_add'] ?></p>
      <p><?= $value['catTitle'] ?></p>
      <a href="index.php?c=edit&id=<?= $value['id_article']?>">Edit</a> 
      <a href="index.php?c=article&id=<?= $value['id_article'] ?>">More</a> 
    </div>
  <? endforeach; ?>
</div>