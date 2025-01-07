<?php

//check if register form was sended
if(@$_POST['reg_loginid'] != "" or @$_POST['reg_kennwort'] != "" or $_POST['email'] != "" ){
    //check other form values
    if($_POST['firstname'] != "" and $_POST['secondname'] != "" and $_POST['str'] != "" and $_POST['stadt'] != "" and $_POST['plz'] != "" and $_POST['telephone'] != ""){
        
        $reg_loginid = trim($_POST['reg_loginid']);
        $kennwort = trim($_POST['reg_kennwort']);
        $email = trim($_POST['email']);
        $firstname = trim($_POST['firstname']);
        $secondname = trim($_POST['secondname']);
        $str = trim($_POST['str']);
        $stadt = trim($_POST['stadt']);
        $plz = trim($_POST['plz']);
        $telephone = trim($_POST['telephone']);
        $fax = trim($_POST['fax']);



        //get connections
        $connection = mysqli_connect("localhost", "root", "", "musikschule")
            or die("Could not connect to MySQL: " . mysqli_connect_error());


        //show if uname or email are already taken

            //define sql
            $sql_loginid = "SELECT count(*) as 'avaible' FROM `zugangsdaten`  WHERE `loginid` = '" . $reg_loginid . "'";
            $sql_email = "SELECT count(*) as 'avaible' FROM `zugangsdaten`  WHERE `email` = '" . $email . "'";

            //run sql
            $query = mysqli_query($connection, $sql_loginid);
            $result = mysqli_fetch_assoc($query)
            or die("Could not execute query: " . mysqli_error($connection));

            $query2 = mysqli_query($connection, $sql_email);
            $result2 = mysqli_fetch_assoc($query2)
            or die("Could not execute query: " . mysqli_error($connection));

            $avaible = $avaible + $result['avaible'] + $result['avaible'];


        print_r($result);
        print_r($result2);
       
        if($avaible == 0){
    
           print_r($_POST);

            $sql = "INSERT INTO `zugangsdaten`(`loginid`, `kennwort`, `email`, `vorname`, `nachname`, `str`, `stadt`, `plz`, `telephone`, `fax`) VALUES ('$reg_loginid', '$kennwort', '$email', '$firstname', '$secondname', '$str', '$stadt', '$plz', '$telephone', '$fax')";
            mysqli_query($connection, $sql);

            echo "Erfolgreich registriert";

            unset($_POST['reg_loginid']);
            unset($_POST['reg_kennwort']);
            unset($_POST['email']);
            unset($_POST['firstname']);
            unset($_POST['secondname']);
            unset($_POST['str']);
            unset($_POST['stadt']);
            unset($_POST['plz']);
            unset($_POST['telephone']);
            unset($_POST['fax']);


            session_destroy();

        }
        else{

            if($result['avaible'] == 1){
                echo "Login-ID ist bereits vergeben";
            }
            if($result2['avaible'] == 1){
                echo "Email ist bereits vergeben";
            }
    
        }

        
    
    
    }
    else{
        ?>
            <p><b>Bitte fülle alle Felder aus!!!</b></p>

        <?php

}



}



?>