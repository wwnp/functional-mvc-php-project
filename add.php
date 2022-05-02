<?php 
  require_once("model/addFn.php");
  $db = new PDO('mysql:host=localhost;dbname=chat', "root", "");
  $db->exec('SET NAMES UTF8');

  $fields = ['name' => '   abc   ', 'text' => ' 123 '];
  $err = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dt = date('Y-d-m H:i:s');
    if ($fields['name'] === '' ||  $fields['text'] === '') {
        $err = 'fill';
    } else {
      $isSend = true;

      $sql = "
        INSERT messages (name, text) 
        VALUES (:name, :text)
      ";
      $query = $db->prepare($sql);
    
      $query->execute(trimFields($fields));
    
      $errInfo = $query->errorInfo();
      if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
      }
      
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

