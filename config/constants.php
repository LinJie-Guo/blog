<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */


define('PERPAGE', 20);

define('UPLOAD_URL', '/upload/');

//define('USE_CACHE' , false);
 define('USE_CACHE' , true);

define('CACHE_TIME_LONG' , 3600*24);
define('CACHE_TIME_MIDDLE' , 3600);
define('CACHE_TIME_SHORT' , 1);//60*5);

define('STATIC_BASE_URL' , 'http://img.diandong.com/car_v2/');
define('IMG_BASE_URL' , 'http://i2.dd-img.com/data/');
define('CMSIMG_BASE_URL' , 'http://i2.dd-img.com/upload/');
define('INVOICE_BASE_URL', 'http://i1.dd-img.com/');

