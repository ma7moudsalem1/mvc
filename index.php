<?php
namespace MVC;
use MVC\App\Core\App;
use MVC\App\Core\Template;
use MVC\App\Core\Controller;

require_once 'env.php';

require_once  CONFIG_PATH . DS . 'init.php';

require_once  APP_PATH . DS . 'core' . DS . 'AutoLoad.php';

$template_parts = require_once  CONFIG_PATH . DS . 'view.php';

$template = new Template($template_parts);
$app = new App($template);
$app->dispatch();