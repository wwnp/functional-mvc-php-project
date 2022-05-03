<?php 
  include_once("model/addFn.php");
  include_once('model/db.php');
  $db = dbInstance();

  $fields = ['name' => '', 'text' => ''];
  $err = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = fillFieldsFromPost();
    $dt = date('Y-d-m H:i:s');
    if ($fields['name'] === '' ||  $fields['text'] === '') {
        $err = 'fill';
    } else {
      $isSend = true;

      $sql = "
        INSERT messages (name, text) 
        VALUES (:name, :text)
      ";
      
      $query = dbQuery($sql, $fields);
      
      header('Location: index.php');
      exit();

      // for article
      // $lastInsId = $db->lastInsertId();
      // header("Location: add.php?id{$lastInsId}"); 
    }
  } 

?>
<form method="POST">
  Name: <br><input type="text" name="name" value="<?= $fields['name'] ?>">
  Text:<br><textarea  name="text"><?= $fields['text'] ?></textarea>
  <button type="submit">Send</button>
  <p><?=$err?></p>
</form>;

