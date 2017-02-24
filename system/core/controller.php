<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller 基类
 */

class controller Extends medoo
{
    
    public function __construct() {
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
        $_GET = $this->check_input($_GET);
        $_POST = $this->check_input($_POST);
        $_COOKIE = $this->check_input($_COOKIE);
        $_REQUEST = $this->check_input($_REQUEST);
        $_SERVER = $this->check_input($_SERVER);
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
    public function check_input($str = '', $is_exec = true)
    {

        if ($is_exec) {

            if (is_array($str)) {

                foreach ($str as $k => $v) {
                    $str[$k] = $this->check_input($v);
                }

            } else {
                $str = addslashes($str);
            }

        }

        return $str;

    }




    /*function __call($functionName,$args){
        echo"Action Error!";
    }*/
}

