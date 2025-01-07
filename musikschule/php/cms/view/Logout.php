<?php
    
namespace CMS\View\Logout;

require_once("../php/cms/view/components/Header.php");
require_once("../php/cms/view/components/Navigation.php");
require_once("../php/cms/controller/LogoutHandler.php");
use CMS\View\components\Header;
use CMS\View\components\Navigation;
use CMS\Controller\LogoutHandler;


function render() {

    \CMS\Controller\LogoutHandler\doLogout();
    
    
}




?>