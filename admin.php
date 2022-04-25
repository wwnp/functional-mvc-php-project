<?php
declare(strict_types=1);

$isSend = false;
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $file = $_FILES['file'];
	if($file['name'] === ''){
		$err = 'Файл не выбран';
	}
	else if($file['size'] === 0){
		$err = 'Файл слишком большой!';
	}
	else if(!preg_match('/.*\.jpg$/',$file['name'])){
		$err = 'Неправильно расширение. Должно быть jpg!';
	}
	else{
    copy($file['tmp_name'],'images/' . mt_rand(1000,10000) . '.jpg');
		$isSend = true;
	}
}else {
  $name = '';
  $phone = '';
}
?>
<div class="form">
	<? if($isSend): ?>
		<p>Your image is done!</p>
	<? else: ?>
		<form method="post" enctype="multipart/form-data">
			<input type="file" name="file">
			<button>Send</button>
			<p><?=$err?></p>
		</form>
	<? endif; ?>
</div>