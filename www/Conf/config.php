<?php
return array(
	// '配置项'=>'配置值'
	
	// 数据库配置信息
    'DB_TYPE'   => 'pdo', // 数据库类型
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '123456', // 密码
    'DB_PREFIX' => 'caidan_', // 数据库表前缀 
    'DB_DSN'    => 'mysql:host=localhost;dbname=caidan;charset=UTF-8',

	// 显示trace信息
	'SHOW_PAGE_TRACE' => true,
    //URL 小写
    'URL_CASE_INSENSITIVE' => true,

	// 默认模板配置
	'DEFAULT_THEME' => 'default',
	// Smarty配置
	'TMPL_ENGINE_TYPE' => 'Smarty',
	'TMPL_ENGINE_CONFIG'=>array(		
		'caching'=>false,
		'template_dir'=>TMPL_PATH,
		'compile_dir'=>TEMP_PATH,
		'cache_dir'=>CACHE_PATH,
		'left_delimiter'=>'{{',
		'right_delimiter'=>'}}'
	)
);
?>
