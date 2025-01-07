<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

require("../php/cms/router/Router.php");
use \CMS\Router\Router;


$router = new \CMS\Router\Router();
$router->initRoutes();

$route = $_GET['route'];

echo $router->handleRequest($route);


?>