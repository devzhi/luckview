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
    'password' => 'Your PassWord'
]);