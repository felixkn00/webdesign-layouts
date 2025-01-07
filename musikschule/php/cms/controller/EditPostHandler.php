<?php 

namespace CMS\Controller\EditPostHandler;

require_once("../php/cms/model/Authentication.php");
require_once("../php/cms/model/database/Database.php");
require_once("../php/cms/model/database/sql/SQLQueryTemplates.php");
use CMS\Model\Authentication;
use CMS\Model\Database\Database;
use CMS\Model\sqlTemplates\Queries; 

function editPostHandler(){
    
    if(Authentication::isLoggedIn()){
        
        if($_GET['notNewImage'] == true){
            if($_GET['postTitle'] != "" && $_GET['description'] != "" and $_GET['postID'] != ""){    
                //update post
                $db = new \CMS\Model\Database\Database();
                $postUpdate = $db->fetch(\CMS\Model\sqlTemplates\Queries\Queries::POST_UPDATE_QUERY_WITHOUT_IMAGE, [$_GET['postTitle'], $_GET['description'], $_GET['postID']], "");

            }
            else{
                if($_GET['postTitle'] != ""){
                    setcookie('oldPostTitle', $_GET['postTitle'], time() + 6);
                }
                if($_GET['description'] != ""){
                    setcookie('oldDescription', $_GET['description'], time() + 6);
                }
                header("Location: index.php?route=editPost&postID=" . $_GET['postID'] . "&error=Please fill out all the fields");
            }
        
            
        }
        else{

            if($_GET['postTitle'] != "" && $_GET['description'] != "" and $_GET['newImageUrl'] != "" and $_GET['postID'] != ""){                 
                //update post
                $db = new \CMS\Model\Database\Database();
                $postUpdate = $db->fetch(\CMS\Model\sqlTemplates\Queries\Queries::POST_UPDATE_QUERY, [$_GET['postTitle'], $_GET['description'], $_GET['newImageUrl'], $_GET['postID']], "");

            }
            else{
                if($_GET['postTitle'] != ""){
                    setcookie('oldPostTitle', $_GET['postTitle'], time() + 6);
                }
                if($_GET['description'] != ""){
                    setcookie('oldDescription', $_GET['description'], time() + 6);
                }
                header("Location: index.php?route=editPost&postID=" . $_GET['postID'] . "&error=Please fill out all the fields");
            }

        }
        


        

       

    };

}




?>