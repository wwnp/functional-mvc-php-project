<?php 
  include_once 'functions.php';
  include_once 'model/logging.php';
  addLogVisit();
  $err = '';
  $isSend = false;

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = (int) $_GET["id"] ?? '';
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    if($title === '' || $content === ''){
      $err = 'More symbols';
    }else{
      editPost($id,$title,$content);
      $isSend = true;
    }
  }
?>
<? if($isSend): ?>
  <h1>DONE</h1>
<? else: ?>
  <form method="POST">
    <input type="text" name='title'><br>
    <input type="text" name='content'>
    <button type="submit">Send</button>
    <? if($err): ?>
      <p><?= $err ?></p>
    <? endif; ?>
  </form>
<? endif; ?>
<a href="index.php">Main Page</a>