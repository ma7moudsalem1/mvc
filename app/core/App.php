<?php
namespace App\Core;

class App{

	protected $controller = 'Home';

	protected $method     = 'index';

	protected $params     = [];
	/**
	* Constuct Note
	*
	**/
	public function __construct()
	{
		$this->parseUrl();		
	}

	protected function parseUrl()
	{
		if(isset($_GET['url'])){
			echo $_GET['url'];
		}
	}
}