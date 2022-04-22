<?php 
function getApps(): array {
  $lines = file('db/app.txt');
  $apps = [];
  foreach($lines as $line){
    $apps[] = appStrToArr($line);
  }
  return $apps;
}

function addApp(string $name, string $phone): bool {
  $dt = date('Y-d-m H:i:s');
  $app = "$dt;$name;$phone\n";
  file_put_contents('db/app.txt',$app, FILE_APPEND);
  return true;
}

function appStrToArr(string $line): array{
  $str = rtrim($line);
  $part = explode(';',$str);
  return [
    'dt' => $part[0],
    'name' => $part[1],
    'phone' => $part[2],
  ];
}