<?php 
  function extractFields(array $target, array $whatExtractArr): array {
    $res = [];
    foreach ($whatExtractArr as $key) {
      $res[$key] = trim($target[$key]);
    }
    return $res;
  }
?>