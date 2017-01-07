<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * controller
 */

class index Extends controller
{
    
    public function __construct() 
    {
        parent::__construct();
    }

    public function index() 
    {
        var_dump($this->db);

        die('index');
    }
}

