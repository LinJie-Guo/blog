<?php
/**
 * 入口文件
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
init::run('home');