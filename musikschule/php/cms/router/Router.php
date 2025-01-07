<?php

namespace CMS\Router;

session_start();

require("../php/cms/model/Authentication.php");
require("../php/cms/view/Login.php");
require("../php/cms/view/Home.php");
require("../php/cms/view/PostList.php");
require_once("../php/cms/view/EditPost.php");
require_once("../php/cms/view/UpdatePost.php");
require_once("../php/cms/view/Logout.php");

use CMS\Model\Authentication;
use \CMS\View\Login;
use \CMS\Controller\LoginHandler;
use \CMS\View\Home;
use CMS\View\Post\List;
use CMS\View\Post\Edit;
use CMS\View\Post\Update;
use CMS\View\Logout;





class Router {
    private $routes = [];

    public function addRoute($route, $handler) {
        $this->routes[$route] = $handler;
        
    }

    public function handleRequest($route) {
        //authentication
        if (!\CMS\Model\Authentication::isLoggedIn()) {  
            return \CMS\View\Login\render($route);
        }

        if (array_key_exists($route, $this->routes)) {
            return $this->routes[$route]();
        }   
        elseif($route == ""){
                return \CMS\View\Home\render();
        }
        else{
            return "404 Not Found";
        }

    
    }

    public function initRoutes() {
        

        $this->addRoute('home', function() {    
            return \CMS\View\Home\render();
        });

        $this->addRoute('posts', function() {    
            return \CMS\View\Post\List\render();
        });

        $this->addRoute('editPost', function() {    
            return \CMS\View\Post\Edit\render();
        });

        $this->addRoute('updatePost', function() {    
            return \CMS\View\Post\Update\render();
        });
        $this->addRoute('logout', function() {    
            return \CMS\View\Logout\render();
        });
        
    }
}




?>