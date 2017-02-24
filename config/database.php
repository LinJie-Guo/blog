<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

return new medoo([
    'database_type' => 'mysql',
    'database_name' => $_SERVER['SVR_MYSQL_DATABASE_S'],
    'server' => $_SERVER['SVR_MYSQL_HOST_S'],
    'username' => $_SERVER['SVR_MYSQL_USERNAME_S'],
    'password' => $_SERVER['SVR_MYSQL_PASSWORD_S'],
    'charset' => 'utf8'
]);