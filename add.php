<?php 
  

  $db = new PDO('mysql:host=localhost;dbname=chat', "root", "");
  $db->exec('SET NAMES UTF8');

  $sql = "
    INSERT messages (name, text) 
    VALUES (:name, :text); 
  ";
  $query = $db->prepare($sql);

  $params = [
    'name' => 'czxc',
    'text' => 'zxczxczxczx',
  ];
  
  foreach ($params as $key => $value) {
    $query->bindParam(":$key",$params[$key]);
  };
  $query->execute();

  
  // or $query->execute($params);
?>