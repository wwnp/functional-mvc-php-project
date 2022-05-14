<?php 
  include_once('model/articles.php');
  include_once('core/auxillary.php');
  include_once('model/cats.php');

  $cats = fetchCats();
  
  $err = '';
  $defaultUrl = 'https://via.placeholder.com/150';

  if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $fields = extractFields($_POST,['title', 'content', 'id_cat', 'imageUrl']);
    $dt = date('Y-d-m H:i:s');
    // $fields['dt_add'] = $dt;
    $validateErrors = validateFields($fields);
    // $fields = prepareFieldsRemoveHTML($fields);

    $fields['imageUrl'] = $fields['imageUrl'] === '' 
    ? $defaultUrl
    : $fields['imageUrl'];

     if(empty($validateErrors)){
      addArticle($fields);
      header("Location: index.php");
    }
  }else {
    $fields = ['title' => '', 'content' => '', 'id_cat' => '', 'imageUrl' => ''];
    $validateErrors = [];
  }
  include("views/v_add.php");
?>
