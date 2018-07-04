<?php
namespace App\Core;

class AutoLoad{

	public static function autoload($class)
	{
		$extendion  = '.php';
		$controller = APP_PATH . DS . 'controllers'. $class . DS . $extendion;
		$core       = APP_PATH . DS . 'core'. DS . $class . $extendion;
		$model      = APP_PATH . DS . 'model' . DS . $class . DS . $extendion;
		echo $core;
		try {

			if(file_exists($controller)){
				require_once $controller;
			}elseif (file_exists($core)) {
				require_once $core;
			}elseif (file_exists($model)) {
				require_once $model;
			}else{
				echo "Class Not Found";
			}

		} catch (Exception $e) {
			var_dump($e);
		}
	}
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');