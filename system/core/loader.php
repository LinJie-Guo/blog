<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @description 加载类库和辅助函数
 * 
 * @author Linjie<a0s@foxmail.com>
 * @version 1.0
 * @createtime 2017-6-16 15:52:00
 * @updatetime 2017-6-16 15:52:00
 */
class loader
{

    //加载类库
    public function library($lib_name, $parameter = '')
    {

        if (file_exists(LIB_PATH . $lib_name . '.php')) {
            
            $lib_name_arr = [];

            include_once LIB_PATH . $lib_name . '.php';

            if (empty($lib_name_arr[$lib_name])) {

                $libname_class = new $lib_name($parameter);

                $lib_name_arr[$lib_name] = $libname_class;
            }

            return $lib_name_arr[$lib_name];
        }
    }

    /*//加载辅助函数
    public function helper($helper)
    {
        include_once HELP_PATH."{$helper}_helper.php";
    }*/
}