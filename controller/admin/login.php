<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller
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

