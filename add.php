<?php
include_once 'functions.php';

$articles = getArticles();
echo '<pre>';
print_r($articles);
echo '</pre>';

$err = '';
$isSend = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $title = trim($_POST["title"]);
  $content = trim($_POST["content"]);
  if( $title === '' ||  $content === '') {
    $err = 'fill inputs';
  }elseif(mb_strlen($title) < 2){
    $err = 'title should be above 2';
  }else {
    if($articles)
    addArticle($title,$content);
    $isSend = true;
    unset($_POST);  
  }
}
/*
your code here
check request method
read POST-data
validate data
call addArticle
 */

?>
<? if($isSend):?>
  <h1>DONE</h1>
<? else: ?>
<form method="POST">
  title:<br><input type="text" name="title">
  content:<br><input type="text" name="content">
  <button type="submit">Send</button>
  <p><?=$err?></p>
</form>;
<? endif; ?>
<hr>
<a href="index.php">Move to main page</a>
