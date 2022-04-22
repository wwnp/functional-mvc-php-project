<?php 
include_once('model/apps.php');
$apps = getApps();

?>
<table>
  <tr>
    <td>Data</td>
    <td>Name</td>
    <td>Phone</td>
  </tr>
  <? foreach($apps as $key): ?>
    <? 
      echo '<pre>';
      print_r($key);
      echo '</pre>';
      ?>
    <tr>
      <td><?= $key['dt'] ?></td>
      <td><?= $key['name'] ?></td>
      <td><?= $key['phone'] ?></td>
    </tr>
  <? endforeach; ?>
</table>