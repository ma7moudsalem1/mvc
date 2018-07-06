<?php
namespace MVC\App\Core;

class Request{

	protected $_request;
	public function __construct()
	{
		$this->_request = json_decode(json_encode($_SERVER), FALSE);
	}

	public function get()
	{
		return $this->_request;
	}

	public function method()
	{
		return $this->_request->REQUEST_METHOD;
	}

	public function ip()
	{
		return $this->_request->REMOTE_ADDR;
	}

	public function currentUrl()
	{
		return url($this->_request->PHP_SELF);
	}

	public function url()
	{
		return $this->_request->REQUEST_SCHEME . '://' . $this->_request->SERVER_NAME . $this->_request->REQUEST_URI;
	}

	public function param($name)
	{
		return $this->_request->QUERY_STRING;
	}

	public function __get($key)
	{
		$method = $this->method();
		if($method === 'GET') { $return = $_GET[$key]; }
		elseif($method === 'POST') { $return = $_POST[$key]; }
		else { $return = null; }
		return $return;
	}
}