<?php 
  include_once 'model/logging.php';
  addLogVisit();
  $allFiles = scandir('db/visits'); 
  $files = array_diff($allFiles, [ 0 => '.', 1 =>  '..']);
?>
<? foreach($files as $key => $value ): ?>
  <a href="log.php?date=<?= $value ?>"><?= $value ?></a><br>
<? endforeach; ?>   
