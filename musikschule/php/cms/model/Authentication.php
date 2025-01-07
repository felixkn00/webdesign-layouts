<?php

namespace CMS\Model;

session_start();


class Authentication {
    public static function isLoggedIn() {
        if($_SESSION['cms_login'] == true) {
            return true;
        }
        else {
            return false;
        }
    }

    
    
}






?>