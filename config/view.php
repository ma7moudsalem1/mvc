<?php

return [
	'template' => [
		'nav' 	   => TEMP_PATH . 'nav' . TEMP_FILE_PREFIX,
		':content' => ':content_file',
	],

	'style_template' => [
		'main'		=> url('/public/website/css/') . 'main.css'
	],

	'script_template' => [
		'main'		=> url('/public/website/js/') . 'main.js'
	],

	//admin
	'admin_template' => [
		'nav' 	   => TEMP_PATH . 'nav' . TEMP_FILE_PREFIX,
		':content' => ':content_file',
	],

	'admin_style_template' => [
		'main'		=> url('/public/admin/css/') . 'main.css'
	],

	'admin_script_template' => [
		'main'		=> url('/public/admin/js/') . 'main.js'
	],
];