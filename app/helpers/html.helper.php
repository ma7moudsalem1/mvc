<?php

/*
* dumping_data | function for debuging : giving html pre data between
*
* @param mixed $data
* @return void
*
*/
if(! function_exists('dumping_data')){
	function dumping_data($data)
	{
		$out  = '<pre>';
		$out .=  var_dump($data);
		$out .= '</pre>';
		return $out;
	}
}

/*
* generateStyle | Generate style link
*
* @param string $path
* @return void
*
*/
if(! function_exists('generateStyles')){
	function generateStyle($path)
	{
		$out  = '<link type="text/css" rel="stylesheet" href="'. $path .'" />';
		return $out;
	}
}

/*
* enerateScript | Generate Script link
*
* @param string $path
* @return void
*
*/
if(! function_exists('generateScript')){
	function generateScript($path)
	{
		$out  = '<script src="'. $path .'"></script>';
		return $out;
	}
}

