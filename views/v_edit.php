<form method="POST">
  Title: <br><input type="text" name="title" value="<?= $fields['title'] ?>">
  Content:<br><textarea  name="content"><?= $fields['content'] ?></textarea>
  Cats: <br><select name="id_cat" id="">
    <? foreach($cats as $key => $value ): ?>
      <option 
        value="<?= $value['id_cat'] ?>" 
        <? echo $article[0]['id_cat'] === $value['id_cat']
          ? 'selected="selected"'
          : ''
        ?>
      >
        <?= $value['title'] ?>
      </option>
    <? endforeach; ?>
  </select>
  <button type="submit">Send</button>
  <p><?=$err?></p>
</form>;
<a href="index.php?c=delete&id=<?= $id ?>">DELETE</a>
