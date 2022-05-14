<?php 
  include_once('model/articles.php');
  include_once('model/cats.php');
  include_once('core/auxillary.php');

  $id = $_GET["id"] ?? '';

  $article = fetchArticle($id);
  if($article){
    $cats = fetchCats();
    
    $fields = [
      'title' => $article[0]['title'] ?? '', 
      'content' => $article[0]['content'] ?? '', 
      'id_cat' => $article[0]['id_cat'] ?? ''
    ];
    $err = '';
  
    if($_SERVER["REQUEST_METHOD"] === 'POST'){
      $fields = extractFields($_POST,['title', 'content', 'id_cat']);
      $dt = date('Y-d-m H:i:s');
      if($fields['title'] === '' ||  $fields['content'] === ''){
        $err = 'fill';
      }else{
        updateArticle($id,$fields);
        header("Location: index.php");
        exit();
      }
    }
    include('views/v_edit.php');
  }else{
    header('HTTP/1.1 404 Not Found');
    include_once 'views/errors/v_404.php';
  }
  



?>
