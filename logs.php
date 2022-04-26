<?php 

  if ($handle = opendir('db/visits')) {
    while (false !== ($entry = readdir($handle))) {
      if($entry !== '.' || $entry !== '..'){
        echo "$entry\n";
        echo "<br>";
      }

    }

    closedir($handle);
}
?>
<table>

</table>