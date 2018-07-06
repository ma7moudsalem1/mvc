<?php
namespace MVC;
use MVC\App\Core\App;
use MVC\App\Core\Controller;

require_once 'env.php';

require_once  CONFIG_PATH . DS . 'init.php';

require_once  APP_PATH . DS . 'core' . DS . 'AutoLoad.php';

$app = new App;
$app->dispatch();