<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @description 登陆
 * 
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-16 15:52:00
 * @updatetime 2017-6-16 15:52:00
 */

class login Extends my_controller
{
    
    public function __construct() 
    {
        parent::__construct();

        //通用变量载入到模板
        $this->general_var[''] = '';
    }

    public function check() 
    {
        //判断是否登陆
        if ($this->i('username', 'p') == 'admin' && $this->i('password', 'p')  == '123456') {
            echo '引入模板';die;
            echo $this->view->render('index.html', $this->general_var);
            exit;
        } else {
            die('登陆失败，即将跳转！');
        }

        
    }
}

