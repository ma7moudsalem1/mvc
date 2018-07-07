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

/*
* print_val | print whatever the data is
*
* @param mixed $data
* @return $data
*
*/
if(! function_exists('print_val')){
	function print_val($data)
	{
		if(is_array($data) || is_object($data)){
			print_r(dumping_data($data));
		}else{
			echo $data;
		}
	}
}

/*
* toObject | Convert array to object
*
* @param array $data
* @return object $data
*
*/
if(! function_exists('toObject')){
	function toObject($data)
	{
		return json_decode(json_encode($data), FALSE);
	}
}

/*
* hash_this | make giving value hasing by sh1 to md5 value
*
* @param string $string
* @return string $string
*
*/
if(! function_exists('hash_this')){
	function hash_this($string)
	{
		return sha1(md5($string));
	}
}


/*
* folder_exist | Check file exist or not
*
* @param string $folder
* @return boolean
*
*/
if(! function_exists('folder_exist')){
	function folder_exist($folder)
	{
	    // Get canonicalized absolute pathname
	    $path = realpath($folder);

	    // If it exist, check if it's a directory
	    if($path !== false AND is_dir($path))
	    {
	        // folder exist
	        return true;
	    }

	    // Path/folder does not exist
	    return false;
	}
}

/*
* render_template | Get view layouts
*
* @param file $file
* @return void
*
*/
if(! function_exists('render_template')){
	function render_template($file)
	{
	    require_once PROJECT_PATH . DS . 'resourse' . DS  . 'template' . DS . 'website' . DS . 'header.tmp.php'; 

	    require_once $file; 

	    require_once PROJECT_PATH .  DS . 'resourse' . DS .  'template' . DS . 'website' . DS . 'footer.tmp.php'; 
	}
}

