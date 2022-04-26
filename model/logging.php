<?php 

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
      'referer' => $parts['referer' ?? null],
    ];
  }

  function addLogVisit(): bool {
    $date = date('Y-m-d');
    $time = date('h:i-s');
    $log = [
      
    ]
    echo $time;
  }
?>