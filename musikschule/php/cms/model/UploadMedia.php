<?php

require_once("Authentication.php");
use CMS\Model\Authentication;



if(CMS\Model\Authentication::isLoggedIn()){
    $filename = rand(999, 9999).trim($_FILES['media']['name']);

    $target_dir = __DIR__ . '/media/';
    
    $target_file = $target_dir . basename($filename);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES['media']['tmp_name'], $target_file)) {
        echo $filename;
    } else {
        echo "";
    }

}

?>
