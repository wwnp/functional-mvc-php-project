<?php 
  include_once 'model/logging.php';
  addLogVisit();
  $allFiles = scandir('db/visits'); // Or any other directory
  $files = array_diff($allFiles, [ 0 => '.', 1 =>  '..']);
  $outArray = fromTxtToArray($files);
?>
<table>
  <tr>
    <td>Date</td>
    <td>Time</td>
    <td>IP</td>
    <td>URI</td>
  </tr>
  <? foreach($outArray as $key => $value ): ?>
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