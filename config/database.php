<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

return new medoo([
    'database_type' => 'mysql',
    'database_name' => 'testing',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8'
]);