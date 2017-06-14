<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 这里实现三个功能
 * 1. 引入静态文件display()
 * 2. 转义实体html标签assign()
 * 3. 制订缓存cache
 *
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-16 15:52:00
 * @updatetime 2017-6-16 15:52:00
 */

class view
{

    public $tpl_vars = array();

    public function display($tmpFile = 'login')
    {
        if (!empty($this->tpl_vars)) {
            foreach ($this->tpl_vars as $key => $value) {
                ${$key} = $value;
            }
        }

        if (file_exists(ADMIN_PATH . 'login' . '.html')) {
            require_once(ADMIN_PATH . 'login' . '.html');
            exit;
        } else {
            die($tmpFile . '模板不存在！');
        }

    }

    /**
     * 载入变量到模板并转义实体
     * @param  string $varName 变量名
     * @param  string $value   值
     * @return void
     */
    public function assign($varName = '', $value = '')
    {

        if (empty($varName) && empty($value)) {
            die('模板变量定义有误！');
        }

        $this->tpl_vars[$varName] = $this->checkOut($value);
    }

    /**
     * 1. 过滤常见的输出类数据
     * @param  str   $str     需要处理的数据
     * @param  boolean $is_exec 是否过滤
     * @return [type]           [description]
     */
    public function checkOut($str = '', $is_exec = true)
    {

        if ($is_exec) {

            if (is_array($str)) {
                foreach ($str as $k => $v) {
                    $str[$k] = $this->checkOut($v);
                }

            } else {
                $str = htmlspecialchars($str);
            }

        }

        return $str;
    }

   
}