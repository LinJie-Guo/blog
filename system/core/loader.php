<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 加载类库和辅助函数
 */

class loader{

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