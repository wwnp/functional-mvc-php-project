<form method="POST">
  Title: <br><input type="text" name="title" value="<?= $fields['title'] ?>">
  Content:<br><textarea  name="content"><?= $fields['content'] ?></textarea>
  Cats: <br><select name="id_cat" id="">
    <? foreach($cats as $key => $value ): ?>
      <option value="<?= $value['id_cat'] ?>"><?= $value['title'] ?></option>
    <? endforeach; ?>
  </select>
  <br>
  imageUrl :  <br>
  <input type="url" name="imageUrl" id="imageUrl">
  <button type="submit">Send</button>
  <div class="error-list">
    <? foreach($validateErrors as $error ): ?>
      <p><?= $error ?></p>
    <? endforeach; ?>
  </div>
</form>;