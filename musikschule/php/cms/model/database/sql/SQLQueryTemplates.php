<?php

namespace CMS\Model\sqlTemplates\Queries;

class Queries {

    //LOGIN_QUERY
    const LOGIN_QUERY = "SELECT * FROM `user` WHERE `username` = ? AND `password` = ?";
    
    //POST_LIST_QUERY
    const POST_LIST_QUERY = "SELECT * FROM `post`";

    //POST_QUERY
    const POST_QUERY = "SELECT * FROM `post` WHERE `postID` = ?";

    //POST_UPDATE_QUERY
    const POST_UPDATE_QUERY = "UPDATE `post` SET `title`= ?,`description`= ?,`image`= ? WHERE `postID` = ?";

    //POST_UPDATE_QUERY_WITHOUT_IMAGE
    const POST_UPDATE_QUERY_WITHOUT_IMAGE = "UPDATE `post` SET `title`= ?,`description`= ? WHERE `postID` = ?";

}



?>