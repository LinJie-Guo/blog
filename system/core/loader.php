<?php
/**
 * 加载类库和辅助函数
 */

class loader{

    //加载类库
    public function library($libname)
    {
        if (file_exists(LIB_PATH . $libname . '.php')) {
            require LIB_PATH . $libname . '.php';
            return new $libname;
        }
    }

    /*//加载辅助函数
    public function helper($helper)
    {
        require HELP_PATH."{$helper}_helper.php";
    }*/
}