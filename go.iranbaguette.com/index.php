<?php

//Application environment
define('ENVIRONMENT', 'production');

//Application folder name
define('APPLICATION_FOLDER', 'application');

//Load common file
require_once('common.php');

//Router
$router = new system\Router();

//Routes
$router->add_routes(config_item('routes', 'routes'));

//Dispatch
$router->dispatch();

?>
