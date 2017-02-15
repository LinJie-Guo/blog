<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller
 */

class index Extends my_controller
{
    
    public function __construct() 
    {
        parent::__construct();

        //通用变量载入到模板
        $this->general_var[''] = '';
    }

    public function index() 
    {

        //判断是否登陆
        if (isset($_SESSION['admin'])) {
            echo $this->twig->render('index.html', $this->general_var);
            exit;
        }

        echo $this->twig->render('login.html', $this->general_var);
        exit;
    }
}

