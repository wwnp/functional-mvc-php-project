<?php
$response = [
    'res' => false,
    'error' => '',
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST["name"] ?? '');
    $phone = trim($_POST["phone"] ?? '');

    if ($name === '' || $phone === '') {
        $response['error'] = 'fill all inputs';
    } else if (mb_strlen($name, 'UTF8') < 2) {
        $response['error'] = 'Name is too short';
    } else {
        $dt = date('Y-d-m H:i:s');
        $mainnody = "$dt\n$phone\n$name";
        mail('1@1.ru', 'New ap', $mainnody);
        $response['res'] = true;
    }
}
echo json_encode($response);
