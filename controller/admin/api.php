<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @description Api
 * 
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-18 14:15:36
 * @updatetime 2017-6-18 14:15:40
 */

class api Extends my_controller
{
    
    
    /**
     * 首页
     * @return [type] [description]
     */
    public function getNavs()
    {

        $userInfo['id'] = 1;

        // $roleInfo = $this->sys_role->getOneByPara(['status'=>1, 'id'=>$userInfo['rid']]);
        // $roleInfo = $this->db->select('sys_role', '*', ["status"=>1, "id"=> 1]);
        $roleInfo = $this->db->select('sys_role', '*', ["status"=>1]);

        $auth_where = "SELECT * FROM sys_auth WHERE status=1 and is_menu=1";
        if ($userInfo['id'] != 1) {
            $auth_where = "SELECT * FROM sys_auth WHERE status=1 and is_menu=1 and id in({$roleInfo['aids']})";
        }
        $authInfo_tmp = $this->db->query($auth_where . ' order by level desc,createtime desc')->fetchAll();
        
        $topCount = $count = 0;
        foreach ($authInfo_tmp as $k => $v) {
            // 顶级菜单
            if ($v['pid'] == 0) {
                $authInfo[$topCount]['title'] = $v['name'];
                $authInfo[$topCount]['spread'] = true;
                $authInfo[$topCount]['icon'] = $v['icon'];
                $authInfo[$topCount]['href'] = '/' . $v['url'];

                // 2级菜单
                foreach ($authInfo_tmp as $k1 => $v1) {
                    if ($v1['pid'] == $v['id']) {
                        $authInfo[$topCount]['children'][$count]['title'] = $v1['name'];
                        $authInfo[$topCount]['children'][$count]['icon'] = $v1['icon'];
                        $authInfo[$topCount]['children'][$count]['href'] = '/' . $v1['url'];
                        $count++;
                    }
                }
                $topCount++;

            }
        }

        echo json_encode($authInfo);die;
    }

    
}

