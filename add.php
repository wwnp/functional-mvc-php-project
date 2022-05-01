<?php 
  $name = 'Stark';
  $db = new PDO('mysql:host=localhost;dbname=chat', "root", "");
  $db->exec('SET NAMES UTF8');
  $sql = "--sql
    INSERT messages (name, text) 
    VALUES (:user, :text);
  ";
  $db->exec($sql); 
?>

