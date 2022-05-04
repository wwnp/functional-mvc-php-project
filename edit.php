<?php 
  include_once('model/articles.php');
  include_once('auxillary.php');

  $id = $_GET["id"] ?? '';

  $cats = fetchCats();

  $article = fetchArticle($id);

  $fields = [
    'title' => $article[0]['title'] ?? '', 
    'content' => $article[0]['content'] ?? '', 
    'id_cat' => $article[0]['id_cat'] ?? ''
  ];
  $err = '';

  if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $fields = fillFieldsFromPost();
    $dt = date('Y-d-m H:i:s');
    if($fields['title'] === '' ||  $fields['content'] === ''){
      $err = 'fill';
    }else{
      updateArticle($id,$fields);
      header("Location: index.php");
    }
  }


?>
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

