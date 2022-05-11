<div>
  <a href="add.php">Add article</a>
  <a href="index.php">View as list</a>
  <hr>
</div>
<table>
  <? foreach($articles as $key => $value ): ?>
    <tr style="border-right: 1px solid #ccc;padding: .5rem;">
      <td><?= $value['title'] ?></td>
      <td><?= $value['content'] ?></td>
      <td><?= $value['dt_add'] ?></td>
      <td><?= $value['catTitle'] ?></td>
      <td><a href="edit.php?id=<?= $value['id_article'] ?>">Edit2</a> </td>
    </tr>
  <? endforeach; ?>
</tab>