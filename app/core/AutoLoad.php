<?php
namespace MVC\App\Core;

class AutoLoad{

	public static function autoload($class)
	{
		$extendion  = '.php';
		$class = str_replace('MVC', '', $class);
		$array = explode('\\', $class);
		$className = end($array);
		array_pop($array);
		$class = strToLower(implode($array, '\\')) . '\\' . $className;
		$class = PROJECT_PATH . $class . $extendion;

		try {

			if(file_exists($class)){
				require_once $class;
			}

		} catch (Exception $e) {
			var_dump($e);
		}
	}
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoad::autoload');