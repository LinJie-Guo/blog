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

        // 权限检查
        $this->sysAuth();

        $this->logs();
    }

    /**
     * 权限验证
     * @return boolean 
     */
    protected function sysAuth()
    {
        $auth_routes = [
            'login', 'login/index', 'login/check', 'login/logout', 'login/main'
        ];

        if (!in_array($this->getClass() . '/' . $this->getMethod(), $auth_routes)) {
            $userInfo = $this->getUserInfoBySession();

            // 登陆状态
            if (empty($userInfo)) {
                $this->jump('/admin/login');
            }


            // 权限查询
            $roleInfo = $this->sys_role->getOneByPara(['status'=>1, 'id'=>$userInfo['rid']]);
            $auth_where = " status=1 and id in({$roleInfo['aids']})";
            $authInfo_tmp = $this->sys_auth->getAllByPara($auth_where);
            foreach ($authInfo_tmp as $k => $v) {
                $authInfo[] = trim($v['url'], '/');
            }

            $authInfo = array_merge($authInfo, $auth_routes);
            $authUrl = trim($this->getClass() . '/' . $this->getMethod() . '/' . $this->uri->segment(3), '/');

            if (!in_array($authUrl, $authInfo) && $userInfo['id'] != 1) {
                die('没有权限');
            }
        }

    }

    /**
     * 获得登陆用户的session
     * @return boolean 
     */
    protected function getUserInfoBySession()
    {
        if (empty($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
            return false;
        }

        $uid = $_SESSION['uid'];

        $userInfo = $this->db->get('sys_user', '*', ["status"=>1, 'id'=>$uid]);
        $userInfo['logged_in'] = true;
        
        $this->view->assign('userInfo' , $userInfo);
        return $userInfo;

    }

    protected function logs()
    {
        // 日志白名单，只记录增加 增删改。
        $actionArr = ['edit', 'add', 'save', 'del'];
        $action = $this->uri->segment(3);

        if (!in_array($action, $actionArr)) {
            return false;
        }

        if (empty($this->input->post()) && $action != 'del') {
            return false;
        }

        $this->load->model('Sys_Log', 'sys_log');
        $username   = $this->session->userdata('username');
        $model  = $this->router->class;
        $ip = $_SERVER["REMOTE_ADDR"];
        
        $url = $this->uri->ruri_string();

        $data_info['get'] = $this->input->get();
        $data_info['post'] = $this->input->post();
       
        $data = array(
            'id' => $this->getUniqid(),
            'username' => $username,
            'url' => $url,
            'data' => json_encode($data_info),
            'ip' => $ip,
        );

        $this->sys_log->insert($data);
    }

    protected function getClass()
    {
        return CONTROLLER;
    }

    protected function getMethod()
    {
        return ACTION;
    }


    /**
     * 通用的信息提示页
     */  
    public function showMsg( $msg = '' , $url = '' , $button='' , $button_url='',$bak='yes',$red=false)
    {
        $this->view->assign('msg' , $msg);
        $this->view->assign('url' , $url);
        $this->view->assign('button' , $button);
        $this->view->assign('button_url' , $button_url);
        $this->view->assign('bak' , $bak);
        $this->view->assign('red' , $red);
        $this->view->display('msgpage');
        exit;
    }

}

