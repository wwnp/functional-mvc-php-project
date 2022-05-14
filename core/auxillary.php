<?php 
  function fillFieldsFromPost(): array {
    $out = [];
    foreach ($_POST as $key => $value) {
      $out[$key] = trim($value);
    }
    return $out;
  }
  function extractFields(array $target, array $whatExtractArr): array {
    $res = [];
    foreach ($whatExtractArr as $key) {
      $res[$key] = $target[$key];
    }
    return $res;
  }
?>