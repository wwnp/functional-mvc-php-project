<?php 
  include_once('model/db.php');
  $db = dbInstance();
  $db2 = dbInstance();

  $res1  = $db->query('Select CONNECTION_ID()')->fetch();
  $res2 = $db2->query('Select CONNECTION_ID()')->fetch();

  $sql = "
    SELECT * FROM messages ORDER BY dt_add DESC;
  ";
  $query = dbQuery($sql);

  $messages = $query->fetchAll();
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
