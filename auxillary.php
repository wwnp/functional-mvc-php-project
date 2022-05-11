<?php 
  function fillFieldsFromPost() {
    $out = [];
    foreach ($_POST as $key => $value) {
      $out[$key] = trim($value);
    }
    return $out;
  }
?>