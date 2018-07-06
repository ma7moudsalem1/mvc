<?php
use MVC\App\Core\Request;

/*
* dumper (die & dump) | function for debuging 
*
* @param mixed $data
* @return void
*
*/
if(! function_exists('dumper')){
	function dumper($data)
	{
		print_r(dumping_data($data));
		die();
	}
}

/*
* url | get url 
*
* @param string $path = '/'
* @return $url
*
*/
if(! function_exists('url')){
	function url($path = null)
	{
		$root = new Request;
		return $root->url() . $path;
	}
}