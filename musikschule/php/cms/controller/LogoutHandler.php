<?php
namespace CMS\Controller\LogoutHandler;

    function doLogout() {
        session_destroy();
        header("Location: index.php");
     
    }



?>