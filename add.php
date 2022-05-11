<?php 
  include_once('model/articles.php');
  include_once('auxillary.php');

  $cats = fetchCats();
  
  $err = '';

  if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $fields = fillFieldsFromPost();
    $dt = date('Y-d-m H:i:s');
    if($fields['title'] === '' ||  $fields['content'] === ''){
      $err = 'fill';
    }else{
      addArticle($fields);
      header("Location: index.php");
    }
  }else {
    $fields = ['title' => '', 'content' => '', 'id_cat' => ''];
  }
  include("views/v_add.php")
?>
