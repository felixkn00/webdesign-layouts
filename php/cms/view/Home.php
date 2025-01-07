<?php 

namespace CMS\View\Home;

require_once("../php/cms/view/components/Header.php");
require_once("../php/cms/view/components/Navigation.php");
require_once("../php/cms/view/components/Footer.php");
use CMS\View\components\Header;
use CMS\View\components\Navigation;
use CMS\View\components\Fotter;

function render() {
    

    \CMS\View\components\Header\render("Home");

    \CMS\View\components\Navigation\render();

    \CMS\View\components\Fotter\render();

}




?>