<?php
namespace MVC\App\Core;
use Intervention\Image\ImageManager;
use MVC\App\Traits\File;
use MVC\App\Traits\Upload;

class Request{
	use File, Upload;
	protected $_request;

	public function __construct()
	{
		$this->_request = toObject($_SERVER);
	}

	public function __get($key)
	{
		$method = $this->method();
		if($method === 'GET') { $return = $_GET[$key]; }
		elseif($method === 'POST') { $return = $_POST[$key]; }
		else { $return = null; }
		return $return;
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
		return $this->_request->REQUEST_SCHEME . '://' . $this->_request->SERVER_NAME . str_replace('/index.php', '/', $this->_request->PHP_SELF);
	}

	public function param($name)
	{
		return $this->_request->QUERY_STRING;
	}

	public function upload($file = 'image')
	{
		return $this->uploadImage($this->file($file));
	}
}