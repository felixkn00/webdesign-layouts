<?php

require_once("dbUser.php");


if($_GET['g_vorname'] != "" and $_GET['g_nachname'] != "" and $_GET['g_date'] != "" and $_GET['g_anliegen'] !== ""){
    echo "form richtig";
   $connection = mysqli_connect("localhost", "root", "", "gaestebuch")
   or die("Connection failed: " . mysqli_connect_error());

   $sql = "INSERT INTO `gaeste` ( `vorname`, `nachname`, `date`, `anliegen`) VALUES ('" . $_GET['g_vorname'] . "', '" . $_GET['g_nachname'] . "', '" . $_GET['g_date'] . "', '" . $_GET['g_anliegen'] . "')";

  $result = mysqli_query($connection, $sql);
    echo "Erfolgreich gespeichert";
   
    mysqli_close($connection);
    
    unset($_GET['g_vorname']);
    unset($_GET['g_nachname']);
    unset($_GET['g_anliegen']);
    unset($_GET['g_date']);
   
   


}






?>