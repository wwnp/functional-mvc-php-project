<?php 
  include_once 'model/logging.php';
  $file = fopen("db/visits/{$_GET['date']}", 'r');
  $apps = txtToArraySingle($file);
?>
<table>
  <tr>
    <td>Date</td>
    <td>Time</td>
    <td>IP</td>
    <td>URI</td>
  </tr>
  <? foreach($apps as $key => $value ): ?>
    <tr>
      <td>
        <?= 
        isset($value['date']) 
          ? $value['date']
          : "X"
        ?>
      </td>
      <td>
        <?= 
        isset($value['time']) 
          ? $value['time']
          : "X"
        ?>
      </td>
      <td>
        <?= 
        isset($value['ip']) 
          ? $value['ip']
          : "X"
        ?>
      </td>
      <td>
        <?= 
        isset($value['uri']) 
          ? $value['uri']
          : "X"
        ?>
      </td>
    </tr>
  <? endforeach; ?>
</table>