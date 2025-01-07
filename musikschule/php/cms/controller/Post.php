<?php

namespace CMS\Controller\Post\Post;

require_once("../php/cms/model/Authentication.php");
require_once("../php/cms/model/database/Database.php");
require_once("../php/cms/model/database/sql/SQLQueryTemplates.php");
require_once("../php/cms/view/components/Post.php");
use CMS\Model\Authentication;
use CMS\Model\Database\Database;
use CMS\Model\sqlTemplates\Queries;
use CMS\View\Components\Post;


function handler($postID) {


    if(\CMS\Model\Authentication::isLoggedIn()){
    
        $db = new \CMS\Model\Database\Database();
        $post = $db->fetch(\CMS\Model\sqlTemplates\Queries\Queries::POST_QUERY, [$postID], "i");
        
      
        $postRenderObj = new \CMS\View\Components\Post\Post($post, false);
        
        return $postRenderObj;
        
        }
    

}




?>