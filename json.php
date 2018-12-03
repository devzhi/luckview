<?php
require 'config.php';

$data = $database->select('user', [
    'username',
    'class',
]);

$jsonData = json_encode($data, true);

echo $jsonData;

?>