<?php 
  function trimFields(array $assoc): array {
    $newAssoc = [];
    foreach ($assoc as $key => $value) {
      $newAssoc[$key] = trim($value);
    }
    return $newAssoc;
  }
?>