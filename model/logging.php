<?php 
  function addLogVisit(): bool {
    $date = date('Y-m-d');
    $time = date('h:i:s');
    $log = [
      'date' => $date,
      'time' => $time,
      'ip' => $_SERVER['SERVER_ADDR'],
      'uri' => $_SERVER['REQUEST_URI'],
    ];
    $log = json_encode($log) . "\n";
    file_put_contents("db/visits/{$date}.txt", $log, FILE_APPEND );
    return true;
  }

  function txtToArraySingle($file): array {
    $str = fread($file, filesize("db/visits/{$_GET['date']}"));
    $lines = explode("\n", $str);
    array_pop($lines);
    $apps = [];
    foreach($lines as $key => $value){
      $parts = json_decode($value,true);
      $apps[] = [
        'date' => $parts['date']  ?? null,
        'time' => $parts['time'] ?? null,
        'ip' => $parts['ip'] ?? null,
        'uri' => $parts['uri'] ?? null,
      ];
    }
    return $apps;
  }




  // FOR ALL LOGS IN ONE PAGE
  function fromTxtToArray(array $files): array {
    $apps = [];
    foreach ($files as $key => $value) {
      $f = fopen("db/visits/{$value}", 'r');
      $strFile = fread($f, filesize("db/visits/{$value}"));
      $lines = explode("\n", $strFile);
      foreach ($lines as $key => $value) {
        if($value !== ''){
          $apps[] = fromLineToArray($value);
        }
      };
    }
    return array_reverse($apps);
  }
  function fromLineToArray(string $line): array {
    $parts = json_decode($line, true);
    return [
      'date' => $parts['date']  ?? null,
      'time' => $parts['time'] ?? null,
      'ip' => $parts['ip'] ?? null,
      'uri' => $parts['uri'] ?? null,
    ];
  }
?>