<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class view{
    
	public function __construct($file_path = 'home') 
    {
        require_once LIB_PATH . 'twig/lib/Twig/Autoloader.php';

        $file_path = '/' . $file_path;

        //基本配置
        $config_default = array(
            'cache_dir' => false, //开启缓存
            // 'cache_dir' => BASEPATH . 'templates_c' . $file_path, //开启缓存
            'debug' => false, //开启调试模式（dump函数可用）  
            'auto_reload' => true,  
            'extension' => '.html', //默认后缀名 
            'template_dir' => BASEPATH . 'templates' . $file_path, //模板路径
        );

        // 注册 Twig 加载器
        Twig_Autoloader::register();
        
        // 设置基本的配置项
        $loadersss = new Twig_Loader_Filesystem($config_default['template_dir']);

        $this->twig = new Twig_Environment($loadersss, array(
            'cache' => $config_default['cache_dir'],  
            'debug' => $config_default['debug'],  
            'auto_reload' => $config_default['auto_reload'],  
        ));

	}

   
}