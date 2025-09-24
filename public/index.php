<?php

require '../helpers.php';
require basePath('Database.php');
$config = require basePath('config/db.php');

$db = new Database($config);

// loadView ('home');
// inspect($method);
// inspectAndDie($uri);

require basePath('Router.php');

//Instantiate the routere
$router = new Router();

//Get routes
$routes = require basePath('routes.php');

//Get current URI and HTTP method

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

//Route the request
$router->route($uri,$method);
