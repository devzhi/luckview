<?php
// If you installed via composer, just use this code to require autoloader on the top of your projects.
require 'vendor/autoload.php';
 
// Using Medoo namespace
use Medoo\Medoo;
// Initialize
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'bigluck',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '***REMOVED***'
]);
/*
// Enjoy
$database->insert('user', [
    'username' => '张三',
    'stuid' => 'J1800101'
]);

$data = $database->select('account', [
    'user_name',
    'email'
], [
    'user_id' => 50
]);
 
echo json_encode($data);
 
// [
//     {
//         "user_name" : "foo",
//         "email" : "foo@bar.com"
//     }
// ]

*/  