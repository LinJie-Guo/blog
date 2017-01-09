<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller 基类
 */

class controller Extends medoo
{
    
    public function __construct() {
        parent::__construct();
        $this->db = init::$db;
        $this->loader=new Loader();
    }

    function __call($functionName,$args){
        echo"Action Error!";
    }
}

