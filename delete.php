<?php

	include_once('functions.php');	
  $articles = getArticles();	

  $id = (int) $_GET["id"] ?? '';
  $out = '';

  if(isset($articles[$id])){
    $response = removeArticle($id);
    echo $response;
    $out = 'Успешно удалено';
    // header('Location: index.php', true, 303);
  }else{
    $out = 'Ошибка удаления';
    // header('Location: index.php', true, 303);
  }
	/*
		your code here
		get id from url
		check id
		call removeArticle
	*/
?>
<p><?= $out ?></p>
<hr>
<a href="index.php">Move to main page</a>