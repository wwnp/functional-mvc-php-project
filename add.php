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
  // $query->execute($params);
  foreach ($params as $key => $value) {
    $query->bindParam(":$key",$params[$key]);
  };
  $query->execute();
  // 1.bindParams
  // $name = 'Admin'; // &_POST['name']
  // $text = '123'; // &_POST['text']

  // $query = $db->prepare($sql); 
  // $query->bindParam(':name', $name);
  // $query->bindParam(':text',$text);
  // $query->execute()
?>