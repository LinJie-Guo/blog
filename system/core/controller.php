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

    public function post($key)
    {
        return $this->i($key, 'p');
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

    /**
     * 跳转
     * @param $url 目标地址
     * @param $info 提示信息
     * @param $sec 等待时间
     * @return void
     */
    public function jump($url,$info=null,$sec=3)
    {
        if(is_null($info)){
            header("Location:$url");
        }else{
            echo"<meta http-equiv=\"refresh\" content=".$sec.";URL=".$url.">";
            echo $info;
        }
        die;
    }

    /**
     * 简单对称加密算法之加密
     * @param String $string 需要加密的字串
     * @param String $skey 加密EKY
     * @return String
     */
    protected function myEncode($string = '', $skey = 'key') 
    {
        $strArr = str_split(base64_encode($string));
        $strCount = count($strArr);
        foreach (str_split($skey) as $key => $value)
            $key < $strCount && $strArr[$key].=$value;
        return str_replace(array('=', '+', '/'), array('O0O0O', 'o000o', 'oo00o'), join('', $strArr));
    }

    /**
     * 简单对称加密算法之解密
     * @param String $string 需要解密的字串
     * @param String $skey 解密KEY
     * @return String
     */
    protected function myDecode($string = '', $skey = 'key') 
    {
        $strArr = str_split(str_replace(array('O0O0O', 'o000o', 'oo00o'), array('=', '+', '/'), $string), 2);
        $strCount = count($strArr);
        foreach (str_split($skey) as $key => $value)
            $key <= $strCount  && isset($strArr[$key]) && $strArr[$key][1] === $value && $strArr[$key] = $strArr[$key][0];
        return base64_decode(join('', $strArr));
    }


}

