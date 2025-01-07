<?php

require_once("dbUser.php");


$connection = mysqli_connect("localhost", "root", "", "gaestebuch")
or die("Connection failed: " . mysqli_connect_error());

$sql = "SELECT * FROM `gaeste`";

$result = mysqli_query($connection, $sql);


while($dataset = mysqli_fetch_assoc($result)){
    ?>
    <p>
    <?php
    print_r("Nummer: ".$dataset['id']."<br><br />");
    print_r("Vorname: ".$dataset['vorname']."<br><br />");
    print_r("Nachname: ".$dataset['nachname']."<br><br />");
    print_r("Datum: ".$dataset['date']."<br><br />");
    print_r("Anliegen: ".$dataset['anliegen']."<br><br /><br><br /><br><br />");
    ?>
    </p>
    <?php

}


?>