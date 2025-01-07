<?php 

?>


<!DOCTYPE html>

<html lang="DE">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Startseite, Musikschule, Tübingen, Klavier, Gittare, Kontakt">
    <meta name="description" content="Willkommen, dies ist die Webpräsents der Musikschule Tübingen, Kontakt">
    <meta name="author" content="Felix, Giulio, Timo, Emre">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Musikschule Tübingen - Kontakt</title>

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/kontakt.css">

    <script>

        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }


        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

    </script>

</head>

<body>
    <div id="myNav" class="overlay">


        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        
        <div class="overlayContent">
            <h2>Private Musikschule Tübingen - Navigation</h2>
            <div class="overlayLinkContainer">
                <div>
                    <a href="./index.html" target="_self" >Startseite</a>
                    <a href="angebote/uebersicht-angebot-kinder-oder-erwachsene.html" target="_self" >Übersicht aller Angebote</a>
                    <a href="angebote/erwachsene/uebersicht-instrumente-erwachsene.php" target="_self" >Angebote für<br>Erwachsene</a>
                    <a href="angebote/kinder/uebersicht-instrumente-kinder.html" target="_self" >Angebote für Kinder</a>
                </div>
                <div>
                    <a href="konto.html" target="_self">Konto / Anmeldebreich</a>
                    <a href="regestrieren.php" target="_self">Regestrieren und Anmelden</a>
                    <a href="kontakt.php" target="_self">Kontakt</a>
                </div>
                <div>
                    <a>Impressum</a>
                    <a>Datenschutz</a>
                </div>
                
                <div class="overlayContentOpeningTimes">
                    <h3>Öffnungszeiten</h3>
                    <h5>Montag bis Freitag </h5><b>9:00 Uhr - 14:30 Uhr und 15:30 - 18:00 Uhr</b>
                    <br>
                    <br>
                </div>

            </div>
        </div>

    </div>


    <div class="container">
        <div class="navigation">
            <img onclick="openNav()" class="navigation_img" src="images/open-navigation.png" alt="No Image avaible">
            <div class="navigation_link_helper">
                <a href="index.html">Startseite/</a><a href="kontakt.php" target="_self">Kontakt</a>
            </div>
           
        </div>



        <h1>Private Musikschule Tübingen</h1>


        <div id="contentContainer1">

            <h2>Kontaktbereich - Formular Auswertung war Erfolgreich</h2>


        </div>

            
      

        
     
        <?php 

        

            
            
            
            
           


                $file = fopen("kontaktAnfragen.txt", "a");
                fwrite($file, "_______________________________________________\n\n\n");
                fwrite($file, "Name: ".@$_GET['name']."\n\n");
                fwrite($file, "\n\n\n");
                fwrite($file, "Telehon: ".$_GET['telephone']."\n\n");
                fwrite($file, "\n\n\n");
                fwrite($file, "Ort: ".$_GET['ort']."\n\n");
                fwrite($file, "\n\n\n");
                fwrite($file, "Postleitzahl: ".$_GET['plz']."\n\n");
                fwrite($file, "\n\n\n");/*
                fwrite($file, "Straße: ".$_GET['str'].", Nr. ".$_GET['str-nr']."\n\n");
                fwrite($file, "\n\n\n");
                fwrite($file, "Email-Adresse: ".$_GET['email']."\n\n");
                fwrite($file, "\n\n\n");
                fwrite($file, "Message: ".$_GET['message']."\n\n");*/
            
          
          ?>
        
        

           
        <p id="ohterContactOptions">
        <a href="mailto:micel@musikschule-tuebingen.de">Email schreiben</a>
        <a href="tel:+499123456789">Jetzt anrufen</a>
        </p>

        <div class="contentContainerFooter">
            <a>Impressum</a><a>Datenschutz</a>
           
            <a href="http://localhost/musikschule/logout.php">Ausloggen</a>
            <a href="http://localhost/musikschule/cms/index.php">Admin</a>
        </div>

    </div>



</body>

<style>
#errorMes {
    font-size: 255%;
    color: #ffbb78;
    font-weight: bolder;

}

.errorMesInput {
    font-size: 155%;
    color: #ffbb78;
    font-weight: bold;
}

#successMes {
    font-size: 155%;
    color: green;
    font-weight: bold;

}


</style>
</html>