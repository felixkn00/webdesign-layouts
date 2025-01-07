<?php


require_once("../modeldatabase/Database.php");
require_once("../php/cms/model/database/sql/SQLQueryTemplates.php");
use  CMS\Model\Database\Database;
use CMS\Model\sqlTemplates\Queries;


if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $database = new Database();
    $resutl = $database->fetch(\CMS\Model\sqlTemplates\Queries\Queries::LOGIN_QUERY, [$username, $password], "ss");

 
    
}


?>