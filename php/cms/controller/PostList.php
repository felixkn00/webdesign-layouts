<?php

namespace CMS\Controller\Post\List;

require_once("../php/cms/model/Authentication.php");
require_once("../php/cms/model/database/Database.php");
require_once("../php/cms/model/database/sql/SQLQueryTemplates.php");
require_once("../php/cms/view/components/Post.php");
use CMS\Model\Authentication;
use CMS\Model\Database\Database;
use CMS\Model\sqlTemplates\Queries;
use CMS\View\Components\Post;


function render() {

    if(\CMS\Model\Authentication::isLoggedIn()){
    
        $db = new \CMS\Model\Database\Database();
        $posts = $db->fetchAll(\CMS\Model\sqlTemplates\Queries\Queries::POST_LIST_QUERY, [], "");
        
        foreach($posts as $post){
            $postRenderObj = new \CMS\View\Components\Post\Post($post, true);
            $postRenderObj->render();
        }

    }
    
}




?>