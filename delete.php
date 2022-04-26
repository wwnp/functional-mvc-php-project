<?php 
  include_once 'functions.php';
  include_once 'model/logging.php';
  
  addLogVisit();

  $id = (int) $_GET["id"] ?? '';
  $out = '';
  $articles = getArticles();
  if(isset($articles[$id])){
    deletePost($id);
    $out = 'Success';
  }else{
    $out = 'Error';
  }
?>
<div>
  <p><?= $out ?></p>
  <a href="index.php">Home</a>
</div>
