<?php
namespace MVC\App\Core;

class App{

	protected $_controller = 'home';

	protected $_action     = 'index';

	protected $_params     = [];

	protected $_isAdmin    = 0; 

	protected $_template; 

	/**
	* Constuct Note
	*
	**/
	public function __construct(Template $template)
	{
		$this->_template = $template;
		$this->parseUrl();		
	}

	/*
	*
	* Parth url is a method that takes no params, and it handle url
	* @return void
	*/
	private function parseUrl()
	{
		if(isset($_GET['url'])){
			$url = explode('/', trim(parse_url($_GET['url'], PHP_URL_PATH), '/'), 3);

			if(isset($url[0]) && $url[0] != '' && strtolower($url[0]) == 'admin'){
				unset($url[0]);
				$this->_isAdmin = 1;
			}

			if(isset($url[0]) && $url[0] != ''){
				$this->_controller = $url[0];
			}

			if(isset($url[1]) && $url[1] != ''){
				$this->_action = $url[1];
			}

			if(isset($url[2]) && $url[2] != ''){
				$this->_param = explode('/', $url[2]);
			}
		}

	}

	public function dispatch()
	{
		if($this->_isAdmin){
			$className    = ADMIN_CONTROLLERS_NAMESPACE . ucfirst($this->_controller) . CONTROLLER_FILE_PREFIX;
			$templateType = ADMIN_TEMPLETE_PRFIX;
		}else{
			$className    = CONTROLLERS_NAMESPACE . ucfirst($this->_controller) . CONTROLLER_FILE_PREFIX;
			$templateType = TEMPLETE_PRFIX;
		}
		
		$error 		= CORE_NAMESPACE . 'Error';
		$action     = $this->_action;
		if(class_exists($className)){
			$controller = new $className();
			if(method_exists($controller, $action)){
				$controller->setController($this->_controller);
				$controller->setAction($this->_action);
				$controller->setTemplateType($templateType);
				$controller->setTemplate($this->_template);
				$controller->$action();
			}else{
				// Not Found Action
			    $controller->error();
			}
		}else{
			// Not Found Controller
			new $error();
		}
	}

}