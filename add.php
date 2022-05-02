<?php 
  error_reporting(E_ALL & ~E_NOTICE);

  $db = new PDO('mysql:host=localhost;dbname=chat', "root", "");
  $db->exec('SET NAMES UTF8');

  $sql = "
    INSERT messages (namе, text) 
    VALUES (:name, :text)
  ";
  $query = $db->prepare($sql);

  $params = [
    'name' => 'czxc',
    'text' => 'zxczxczxczx',
  ];
  $query->execute($params);

  $errInfo = $query->errorInfo();
  if($errInfo[0] !== PDO::ERR_NONE){
    echo $errInfo[2];
    exit();
  }
   
?>