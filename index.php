<?php 
  include_once('model/db.php');
  include_once('model/messages.php');
  $messages = allMsgs();
  
?>
<div>
  <? foreach($messages as $key => $value ): ?>
    <p><?= $value['id_message'] ?></p>
    <p><?= $value['name'] ?></p>
    <p><?= $value['text'] ?></p>
    <p><?= $value['dt_add'] ?></p>
    <p><?= $value['status'] ?></p>
    <hr>
  <? endforeach; ?>
</div>
