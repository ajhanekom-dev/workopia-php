<?php

require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;
use Framework\Database;

// spl_autoload_register(function ($class){
//     $path = basePath('Framework/'.$class.'.php');
//     if(file_exists($path)){
//         require $path;
//     }
// });

//Instantiate the route
$router = new Router();

$config = require basePath('config/db.php');

$db = new Database($config);



//Instantiate the routere
$router = new Router();

//Get routes
$routes = require basePath('routes.php');

//Get current URI and HTTP method

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


//Route the request
$router->route($uri);
