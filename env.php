<?php

define('DEBUG', true);

define('DS', DIRECTORY_SEPARATOR);

define('PROJECT_PATH', realpath(dirname(__FILE__)));
define('CONFIG_PATH', PROJECT_PATH . DS .'config');
define('APP_PATH', PROJECT_PATH . DS . 'app');
define('PUBLIC_PATH', PROJECT_PATH . DS . 'public' . DS);
define('UPLOAD_PATH', PUBLIC_PATH . 'uploads' . DS);
define('VIEWS_PATH', APP_PATH . DS . 'views' . DS);
define('TEMP_PATH', PROJECT_PATH . DS . 'resourse' . DS . 'template' . DS . 'website' . DS);
define('ADMIN_TEMP_PATH', PROJECT_PATH . DS . 'resourse' . DS . 'template' . DS . 'admin' . DS);

define('MAIN_NAMESPACE', 'MVC');
define('CORE_NAMESPACE', MAIN_NAMESPACE . '\App\Core\\');
define('CONTROLLERS_NAMESPACE', MAIN_NAMESPACE . '\App\Controllers\\');
define('ADMIN_CONTROLLERS_NAMESPACE',CONTROLLERS_NAMESPACE . 'Admin\\');
define('MODELs_NAMESPACE', MAIN_NAMESPACE . '\App\Model\\');

define('TEMPLETE_PREFIX', 'Website');
define('ADMIN_TEMPLETE_PREFIX', 'Admin');

define('TEMP_FILE_PREFIX', '.tmp.php');
define('VIEW_FILE_PREFIX', '.view.php');
define('CONTROLLER_FILE_PREFIX', 'Controller');

define('DATABASE_DRIVE', 'mysql');
define('DATABASE_HOST', '127.0.0.1');
define('DATABASE_USER', 'root');
define('DATABASE_PASSWORD', 'mysql');
define('DATABASE_NAME', 'mvc');
define('DATABASE_CHARSET', 'utf8');
define('DATABASE_COLLACTION', 'utf8_general_ci');
define('DATABASE_PREFIX', '');







