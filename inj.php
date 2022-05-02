<?php 
  $db = new PDO('mysql:host=localhost;dbname=chat', "root", "");
  $db->exec('SET NAMES UTF8');

  
  $id = (int) $_GET["id"] ?? '';
  // $text = $_GET["text"];
  $text = $db->quote($_GET["text"]);
  var_dump($text);
  $sql = "
    UPDATE messages 
    SET text=$text
    WHERE id_message='$id';
  ";

  $db->exec($sql); 
?>
