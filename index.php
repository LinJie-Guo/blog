<?php
/**
 * 入口文件
 * 
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-16 15:52:00
 * @updatetime 2017-6-16 15:52:00
 */

// ON or OFF
define('DEBUG', 'ON');

if (DEBUG == 'ON') {
    error_reporting(E_ALL);
} else {
    error_reporting(0);
}

//定义系统路径
$system_path = dirname(__FILE__);
$system_path = rtrim($system_path, '/').'/';
define('BASEPATH', str_replace("\\", "/", $system_path));

require_once BASEPATH.'/system/core/init.php';

$url = $_SERVER['PHP_SELF']; 
$filename = (explode('/',$url));

if (isset($filename[1]) && $filename[1] == 'admin') {
    init::run('admin');
} else {
    init::run('home');
}