<?php

//start php session
session_start();


if(@$_POST['loginid'] != "" or @$_POST['kennwort'] != ""){

        
        
        //define varibles
        $loginid = trim($_POST['loginid']);
        $kennwort = trim($_POST['kennwort']);
    
    
    
        //do login query to database
       
            $connection = mysqli_connect("localhost", "root", "", "musikschule");
    
            $sql = "SELECT count(*) as 'avaible' FROM `zugangsdaten`  WHERE `loginid` = '" . $loginid . "' AND `kennwort` = '" . $kennwort . "'";
            $result = mysqli_query($connection, $sql);
    
            $data = mysqli_fetch_assoc($result);
            print_r($data['avaible']);
    
            if($data['avaible'] == 1){
                
                echo "Erfolgreich eingeloggt";
                $_SESSION['login'] = TRUE;
            
            }
            else{
    
                echo "Login fehlgeschlagen";
                $_SESSION['login'] = FALSE;
    
    
            }
    
    }


?>