<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
	'driver'	 =>	DATABASE_DRIVE,
	'host'		 =>	DATABASE_HOST,
	'username'	 => DATABASE_USER,
	'password'	 => DATABASE_PASSWORD,
	'database'	 => DATABASE_NAME,
	'charset'	 => DATABASE_CHARSET,
	'collaction' => DATABASE_COLLACTION,
	'prefix'	 => DATABASE_PREFIX
	]);

$capsule->bootEloquent();