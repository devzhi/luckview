<?php
require 'config.php';
$data = $database->select('user', [
    // 'id',
    'username',
    'stdid'
]);
$jsonData = json_encode($data,TRUE);

echo $jsonData;