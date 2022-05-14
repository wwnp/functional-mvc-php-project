<?php 
  function fetchCats() {
    $sql = "
      SELECT * from cats;
    ";
    $query = dbQuery($sql);
    $cats = $query->fetchAll();
    return $cats;
  }
?>