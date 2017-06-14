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
        $this->TKD['title'] = '管理系统';
    }
    
    /**
     * 首页
     * @return [type] [description]
     */
    public function main()
    {
        $this->view->display('login/index');
    }

    /**
     * 登陆页
     * @return [type] [description]
     */
    public function index() 
    {
        $this->view->assign('TKD', $this->TKD);
        $this->view->display('login/login');
    }

    /**
     * 登陆检查
     * @return [type] [description]
     */
    public function check() 
    {
        $username = $this->post('username');
        $password = $this->myEncode($this->post('password'));

        $userInfo = $this->db->get('sys_user', '*', ["status"=>1, 'username'=>$username, 'password'=>$password]);

        if (empty($userInfo)) {
            $this->showMsg('账号不存在或密码错误', '/admin/login/');
        }

        // 登陆成功，保存session，跳转到首页
        $_SESSION = array(
            'username' => $userInfo['username'],
            'name' => $userInfo['name'],
            'uid' => $userInfo['id'],
            'rid' => $userInfo['rid'],
            'logged_in' => TRUE
        );

        $this->jump('/admin/login/main');

    }

    /**
     * 后台介绍
     * @return [type] [description]
     */
    public function intro()
    {
        echo '欢迎回来！';

    }

    public function logout()
    {
        unset($_SESSION);
        $this->jump('/admin/login/');
    }

}

