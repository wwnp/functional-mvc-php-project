<?php
include_once 'model/gallery.php';
$files = scandir('images');
$images = array_filter($files,function($f){
  return is_file("images/$f") && checkName($f);
});
echo '<pre>';
print_r(array_values($images));
echo '</pre>';
?>
<div>
  <? foreach($images as $image) : ?>
    <img src="images/<?= $image ?>" alt="qwe" width="300px">
  <? endforeach; ?>
</div>
