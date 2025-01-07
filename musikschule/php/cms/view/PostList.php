<?php

namespace CMS\View\Post\List;

require_once("../php/cms/view/components/Header.php");
require_once("../php/cms/view/components/Navigation.php");
require_once("../php/cms/controller/PostList.php");
use CMS\View\components\Header;
use CMS\View\components\Navigation;
use CMS\Controller\Post\List;



function render() {

    \CMS\View\components\Header\render("Posts");

    \CMS\View\components\Navigation\render();


    ?>
    
        <h2 class="subheader">Post List</h2>

    <?php
    

    \CMS\Controller\Post\List\render();


    
   
   

}



?>