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
// Sql - иньекции:
// localhost/test/inj.php?id=13 OR 1=1
// localhost/test/inj.php?id=13' OR '1=1
// localhost/test/inj.php?id=13' OR '1=1 &text=SUCK MY DICK', status='1

// fight :
//    typization
//    regex (remove symbol ')
//    экранирование
//      USE PREPARED QUERIES
//      ?id=13\' OR \'1=1 &text=SUCK MY DICK\', status=\'1
//      method quote
//      $text = $db->quote($_GET["text"]);