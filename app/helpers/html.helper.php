<?php

/*
* dumping_data function for debuging : giving html pre data between
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