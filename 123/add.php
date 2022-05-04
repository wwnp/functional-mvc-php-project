<?php 
  include_once("model/addFn.php");
  include_once('model/db.php');
  include_once('model/messages.php');

  $fields = ['name' => '', 'text' => ''];
  $err = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = fillFieldsFromPost();
    $dt = date('Y-d-m H:i:s');
    if ($fields['name'] === '' ||  $fields['text'] === '') {
      $err = 'fill';
      exit();
    } 
      $isSend = true;
      insertMsg($fields);
      header("Location: index.php");
      exit();
      // for article
      // $lastInsId = $db->lastInsertId();
      // header("Location: add.php?id{$lastInsId}"); 
  } 

?>
<form method="POST">
  Name: <br><input type="text" name="name" value="<?= $fields['name'] ?>">
  Text:<br><textarea  name="text"><?= $fields['text'] ?></textarea>
  <button type="submit">Send</button>
  <p><?=$err?></p>
</form>;

