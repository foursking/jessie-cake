<?php

define('APP_NAME', 'www');
define('APP_PATH', '../www/');
define('RES_PATH', '../res/');
define('RUNTIME_PATH', APP_PATH . 'Runtime/');
define('LIB_PATH', APP_PATH . 'Lib/');
define('CONF_PATH', APP_PATH . 'Conf/');
define('LANG_PATH', APP_PATH . 'Lang/');
define('TMPL_PATH', APP_PATH . 'Tpl/');
define('HTML_PATH', APP_PATH . 'Html/');
define('LOG_PATH', RUNTIME_PATH . 'Logs/');
define('TEMP_PATH', RUNTIME_PATH . 'temp/');
define('DATA_PATH', RUNTIME_PATH . 'Data/');
define('CACHE_PATH', RUNTIME_PATH . 'Cache/');

define('APP_DEBUG', true);

require '../include/ThinkPHP/ThinkPHP.php';
