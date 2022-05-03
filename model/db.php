<?php 
  function dbInstance(): PDO {
    $db = new PDO('mysql:host=localhost;dbname=chat', "root", "", [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $db->exec('SET NAMES UTF8');
    return $db;
  }
  function dbQuery(string $sql, array $params = []): PDOStatement {
    $db = dbInstance();
    $query = $db->prepare($sql);
    $query->execute($params);
    dbCheckErr($query);
    return $query;
  }
  function dbCheckErr(PDOStatement $query):bool {
    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
      echo $errInfo[2];
      exit();
    }
    return true;
  }
?>