<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 博客的核心类。这里完成了自动加载、引入全局变量(常量)、配置文件等。
 * 
 * 关于安全：不需要对参数过滤，利用Medoo合理的拼写sql可以杜绝注入。但是最后的输出一定要转义实体
 *
 * 未完成 lib加载(已经完成)、模板引擎(Smarty太大，写一个简单的)
 */

class init {
    
    public function __construct() 
    {
    }

    public static $platform = 'home';
    public static $db = 'home';

    public static function run($platform)
    {   
        self::$platform = $platform;
        self::init();
        self::autoload();
        self::dispatch();
    }

    //定义常用路径常量
    private static function init()
    {
        
        //CORE路径
        define('CORE_PATH', BASEPATH . 'system/core/');

        //载入框架核心类
        require_once CORE_PATH . 'medoo.php';
        require_once BASEPATH . 'config/config.php';
        self::$db = require_once BASEPATH . 'config/database.php';
        require_once BASEPATH . 'config/constants.php';
        require_once CORE_PATH . 'controller.php';
        require_once CORE_PATH . 'loader.php';

        //判断是否开启PATH_INFO
        if ($g['PATH_INFO']) {
            $PATH_INFO = $_SERVER['PATH_INFO'];
            $PATH_INFO = explode('/', trim($_SERVER['PATH_INFO'], '/'));

            define('CONTROLLER', !empty($PATH_INFO[0]) ? $PATH_INFO[0] : $route['default_controller']);
            define('ACTION', !empty($PATH_INFO[1]) ? $PATH_INFO[1] : $route['default_action']);
        } else {
            define('CONTROLLER', !empty($_GET['c']) ? $_GET['c'] : $route['default_controller']);
            define('ACTION', !empty($_GET['a']) ? $_GET['a'] : $route['default_action']);
        }
    }

    //路由分发
    private static function dispatch()
    {
        //实例化对象，并调用方法，对象名和方法名都是变量
        $controller_name = CONTROLLER;
        $action_namt = ACTION;
        $controller = new $controller_name(); //实例化对象
        $controller->$action_namt();
    }

    //将load注册为自动加载
    private static function autoload()
    {
        spl_autoload_register(array(__CLASS__,'load'));
    }

    //自动载入方法
    private static function load($classname)
    {
        if (self::$platform != 'home') {
            self::$platform  = 'admin';
        }

        //此处我们只需对控制器和模型进行自动加载
        if (file_exists(BASEPATH . 'controller/' . self::$platform  . '/' . strtolower($classname) . '.php')) {
            require_once(BASEPATH . 'controller/' . self::$platform  . '/' . strtolower($classname) . '.php');
        } else {
            die('Controller Error!');
        }
       
    }

}

