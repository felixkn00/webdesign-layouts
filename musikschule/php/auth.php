








<?php


ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);




//start php session
session_start();





//check variables
if(@$_POST['loginid'] != "" or @$_POST['kennwort'] != ""){
echo "check";
    
    
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



//if login session not avaible
if($_SESSION['login'] != true){

    ?>
        <h2>Geschützer Bereich</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="loginid">login-id</label>
            <input type="text" name="loginid" placeholder="Login-ID" />
            <label for="pw">Kennwort</label></label>
            <input type="password" name="kennwort">
            <input type="submit" />

        </form>





    
    
    
    <?php
require("register.php");
    ?>
    
    

    <div class="contactForm">
            <fieldset>
                <legend>Regestrieren</legend>
            <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="reg_loginid">Benutzern</label><input name="reg_loginid" id="reg_loginid" type="text" size="120"
                    placeholder="Dein Benutzername" value="<?php echo @$_POST['reg_loginid'] ?>">

                <label for="reg_kennwort">Passwort</label><input name="reg_kennwort" type="password" id="reg_kennwort" size="120"
                    placeholder="Dein Passwort" value="<?php echo @$_POST['reg_kennwort'] ?>">

                <label for="email">Email</label><input name="email" id="email" type="email" size="120"
                    placeholder="Deine Email-Adresse" value="<?php echo @$_POST['email'] ?>">

                <label for="firstname">Vorname</label><input name="firstname" id="firstname" type="text" size="120"
                    placeholder="Dein Vorname" value="<?php echo @$_POST['firstname'] ?>">

                <label for="secondname">Nachname</label><input name="secondname" id="secondname" type="text" size="120"
                    placeholder="Dein Nachname" value="<?php echo @$_POST['secondname'] ?>">

                <label for="str">Straße</label><input name="str" id="str" size="120" placeholder="Deine Straße" value="<?php echo @$_POST['str'] ?>">

                <label for="ort">Stadt</label><input name="stadt" type="text" id="stadt" size="120"
                    placeholder="Dein Wohnort" value="<?php echo @$_POST['stadt'] ?>">

                <label for="land">Land</label>
                    <select name="land" id="land">
                        <optgroup label="Land">
                            <option value="deutschland">Deutschland</option>
                            <option value="oestereich">Östereich</option>
                            <option value="schweiz">Schweiz</option>
                        </optgroup>
                    </select>
                
                
                    <label for="plz">PLZ</label><input name="plz" type="text" id="plz" size="25"
                    placeholder="Deine Postleitzahl" value="<?php echo @$_POST['plz'] ?>">

                <label for="telephone">Telefon</label><input name="telephone" id="telephone" type="text" size="120"
                    placeholder="Deine Telefonnummer" value="<?php echo @$_POST['telephone'] ?>">
 
                    <label for="telephone">Fax</label><input name="fax" id="telephone" type="text" size="120"
                    placeholder="Deine Faxnummer" value="<?php echo @$_POST['fax'] ?>">
                

                <input type="submit" value="Registrieren">
                <br>
                <br>
            </form>
        </fieldset>
        </div>

        <?php 
    


?>
    
    <?php

    exit;


}



?>




<?php

    

?>


