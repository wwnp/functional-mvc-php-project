<?php 
  function insertMsg(array $params):bool {
    $sql = "
      INSERT messages (name, text) 
      VALUES (:name, :text)
    ";
    $query = dbQuery($sql, $params);
    return true;
  }
  function allMsgs():array {
    $sql = "
      SELECT * FROM messages ORDER BY dt_add DESC;
    ";
    $query = dbQuery($sql);
    $messages = $query->fetchAll();
    return $messages;
  }
?>