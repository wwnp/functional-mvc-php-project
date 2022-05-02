<?php 
  error_reporting(E_ALL & ~E_NOTICE);
  echo "INDEX.php";
  $db = new PDO('mysql:host=localhost;dbname=chat', "root", "", [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
  $db->exec('SET NAMES UTF8');

  $sql = "
    SELECT * FROM messages ORDER BY dt_add DESC;
  ";

  $query = $db->prepare($sql);
  $query->execute();
  $errInfo = $query->errorInfo();

  if($errInfo[0] !== PDO::ERR_NONE){
    echo $errInfo[2];
    exit();
  }

  $messages = $query->fetchAll();
  echo '<pre>';
  print_r($messages);
  echo '</pre>';
  echo '<hr>';


  // function myFetchAll($query) {
  //   $out = [];
  //   $arr = $query->fetch();
  //   for ($i = 0; $arr !== false; $i++) {
  //     $arr = $query->fetch();
  //     $out[$i] = $arr;
  //   }
  //   return $out;
  // }
?>
<div>
  <? foreach($messages as $key => $value ): ?>
    <p><?= $value['id_message'] ?></p>
    <p><?= $value['name'] ?></p>
    <p><?= $value['text'] ?></p>
    <p><?= $value['dt_add'] ?></p>
    <p><?= $value['status'] ?></p>
    <hr>
  <? endforeach; ?>
</div>
