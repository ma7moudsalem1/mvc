<?php
namespace MVC\App\Core;

class Error{

	const FOLDER_NAME   = 'errors';
	const EXTENION_NAME = '.view.php';

	public function __construct($number = 404)
	{
		$this->error($number);
	}

	public function error($number)
	{
		$view = VIEWS_PATH . self::FOLDER_NAME . DS . $number . self::EXTENION_NAME;
		file_exists($view) ? require_once $view : 'Error '. $number;
	}
}