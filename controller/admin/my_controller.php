<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller
 * 
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-16 15:52:00
 * @updatetime 2017-6-16 15:52:00
 */
class my_controller Extends controller
{
    
    public function __construct() 
    {
        parent::__construct();

        //通用变量载入到模板
        $this->general_var = [
            'admin_base_url' => BASE_URL . '/admin.php/',
            'T' => 'Blog管理系統',
            'k' => 'Blog管理系統',
            'd' => 'Blog管理系統',
        ];
    }

}

