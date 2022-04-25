<?php 
include_once 'functions.php';
  $err ='';
  $isSend = false;
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['title'];
    $content = $_POST['content'];
    if($name === '' || $content === ''){
      $err = 'No empty';
    }
    elseif(mb_strlen($name) < 2){
      $err = 'Name More than 2';
    }
    else {
      $isSend = true;
      addArticle($name,$content);
    }
    
  }
?>
<? if(!$isSend): ?>
<form method="post">
  <input type="text" name='title'>
  <input type="text" name='content'>
  <button type="submit">Send</button>
  <? if($err): ?>
    <p><?= $err ?></p>
  <? endif; ?>
</form>
<? else: ?>
  <h1>DONE</h1>
<? endif; ?>
<hr>
<a href="index.php">Main Page</a>