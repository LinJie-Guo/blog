<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller
 * 
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-16 15:52:00
 * @updatetime 2017-6-16 15:52:00
 */
class index Extends my_controller
{
    
    public function __construct() 
    {
        parent::__construct();

        //通用变量载入到模板
        $this->TKD['title'] = '管理系统';
    }

    public function index() 
    {

        //判断是否登陆
        if (isset($_SESSION['admin'])) {
            echo $this->view->display('index', $this->general_var);
            exit;
        }
        
        $this->view->assign('TKD', $this->TKD);

        $this->view->display('login');
        exit;
    }
}

