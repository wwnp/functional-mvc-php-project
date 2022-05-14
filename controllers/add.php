<?php 
  include_once('model/articles.php');
  include_once('core/auxillary.php');
  include_once('model/cats.php');

  $cats = fetchCats();
  
  $err = '';

  if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $fields = extractFields($_POST,['title', 'content', 'id_cat']);
    $dt = date('Y-d-m H:i:s');
    $validateErrors = validateFields($fields);
    // $fields = prepareFieldsRemoveHTML($fields);
    if(empty($validateErrors)){
      addArticle($fields);
      header("Location: index.php");
    }
  }else {
    $fields = ['title' => '', 'content' => '', 'id_cat' => ''];
    $validateErrors = [];
  }
  include("views/v_add.php")
?>
