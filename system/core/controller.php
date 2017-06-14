<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller 基类
 * 
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-16 15:52:00
 * @updatetime 2017-6-16 15:52:00
 */

class controller Extends medoo
{
    
    public function __construct() 
    {
        parent::__construct();
        $this->db = init::$db;

        //Load library
        $this->loader = new Loader();
        $this->view = $this->loader->library('view', 'admin');

        //使用twig模板引擎
        // $this->twig = $this->view->twig;

        //执行需要初始化的数据
        $this->init();

    }

    /**
     * 初始化
     * @return [type] [description]
     */
    public function init()
    {
        $_GET = $this->checkInput($_GET);
        $_POST = $this->checkInput($_POST);
        $_COOKIE = $this->checkInput($_COOKIE);
        $_REQUEST = $this->checkInput($_REQUEST);
        $_SERVER = $this->checkInput($_SERVER);
    }

    /**
     * 防止未初始化的数据报错
     * @param  string $key    [description]
     * @param  string $action g=>get,p=>post,r=>request
     * @return [type]         [description]
     */
    public function i($action_key = '', $action = 'g')
    {
        $action_arr = [
            'g' => $_GET,
            'p' => $_POST,
            'r' => $_REQUEST
        ];

        $a = $action_arr[$action];

        if (empty($action_key)) {
            return $a;
        }

        if (isset($a[$action_key]) && is_array($a[$action_key])) {

            foreach ($a[$action_key] as $k => $v) {
                $a[$action_key][$k] = $v;
            }

        } else {

            if (empty($a[$action_key])) {
                $a[$action_key] = '';
            } else {
                $a[$action_key] = $a[$action_key];
            }
        }

        return $a[$action_key];
    }

    /**
     * 1. 过滤常见的输入类数据
     * @param  str   $str     需要处理的数据
     * @param  boolean $is_exec 是否过滤
     * @return [type]           [description]
     */
    public function checkInput($str = '', $is_exec = true)
    {

        if ($is_exec) {

            if (is_array($str)) {

                foreach ($str as $k => $v) {
                    $str[$k] = $this->checkInput($v);
                }

            } else {
                $str = addslashes($str);
            }

        }

        return $str;
    }

}

