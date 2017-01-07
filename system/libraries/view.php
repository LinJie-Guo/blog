<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class View Extends Smarty{
    
	public function __construct() {
        parent::__construct();
        
	    $rootPath =  ROOTPATH;

        $this->compile_dir      =   $rootPath.'/template_c/';
        $this->template_dir     =   $rootPath.'/templates/';
        $this->force_compile    =   true;

				
        //创建smarty 编译目录	
        $this->recursiveMkdir( $this->compile_dir );
        
		$this->left_delimiter  = '{{';
		$this->right_delimiter = '}}';
		$this->compile_locking = false;
	}
    /**
     * 建目录
     */ 
    private  function recursiveMkdir($pathname , $mode=0700) {
  		is_dir(dirname($pathname)) || $this->recursiveMkdir(dirname($pathname), $mode);
   	    return is_dir($pathname) || mkdir($pathname, $mode);
	}
}