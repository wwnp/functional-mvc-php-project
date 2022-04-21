<?php
$isSend = false;
$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '123312313';
    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $dt = date('Y-d-m H:i:s');
    if ($name === '' || $phone === '') {
        $err = 'fill';
    } else {
        $mainnody = "$dt\n$phone\n$name";
        mail('1@1.ru', 'New ap', $mainnody);
        $isSend = true;
    }
} else {
    echo "METHOD GET";
} // METHOD GET
echo $isSend;
echo '<pre>';
print_r($_POST);
echo '</pre>';

?>
<?if ($isSend): ?>
<h1>DONE</h1>
<?else: ?>
<form method="POST">
  Name: <br><input type="text" name="name">
  Phone:<br><input type="text" name="phone">
  <button type="submit">Send</button>
  <p><?=$err?></p>
</form>;
<?endif;?>