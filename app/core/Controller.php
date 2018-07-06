<?php
namespace MVC\App\Core;
use MVC\App\Core\Error;
use MVC\App\Core\Request;
class Controller{

	protected $_controller;
	protected $_action;
	protected $_param;

	public function setController($controller)
	{
		$this->_controller = $controller;
	}

	public function setAction($action)
	{
		$this->_action = $action;
	}

	public function setParam($param)
	{
		$this->_param = $param;
	}

	public function view($path = null)
	{
		$view = VIEWS_PATH;
		if($path != null){
			$path = str_replace('.', DS, $path);
		}
		$view = $path == null ? $view . $this->_controller . DS . $this->_action : $view . $path;
		file_exists($view) ?  require_once $view : $this->error(500);
	}

	public function error($number = 404)
	{
		$error = new Error($number);
		return $error;
	}

	public function request()
	{
		$request = new Request;
		return $request;
	}


}