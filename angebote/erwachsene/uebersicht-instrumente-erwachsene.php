<?php 
require_once("../../php/cms/view/publicView/ListPosts.php"); 

$postList = new Posts();

?>
<!DOCTYPE html>

<html lang="DE">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Startseite, Musikschule, Tübingen, Klavier, Gittare, Angebote, Übersicht">
    <meta name="description" content="Willkommen, dies ist die Webpräsents der Musikschule Tübingen Angebote für Erwachsene">
    <meta name="author" content="Felix, Giulio, Timo, Emre">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Musikschule Tübingen - Instrumente Erwachsene</title>

    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="stylesheet" href="../../styles/insturmente-liste.css">

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
                    <a href="../../index.html" target="_self" >Startseite</a>
                    <a href="../../angebote/uebersicht-angebot-kinder-oder-erwachsene.html" target="_self" >Übersicht aller Angebote</a>
                    <a href="uebersicht-instrumente-erwachsene.php" target="_self" >Angebote für<br>Erwachsene</a>
                    <a href="../kinder/uebersicht-instrumente-kinder.html" target="_self" >Angebote für Kinder</a>
                </div>
                <div>
                    <a href="../../konto.html" target="_self">Konto / Anmeldebreich</a>
                    <a href="../../regestrieren.php" target="_self">Regestrieren und Anmelden</a>
                    <a href="../../kontakt.php" target="_self">Kontakt</a>
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
            <img onclick="openNav()" class="navigation_img" src="../../images/open-navigation.png" alt="No Image avaible">
            <div class="navigation_link_helper">
                <a href="../../index.html">Startseite/</a><a href="../uebersicht-angebot-kinder-oder-erwachsene.html" target="_self">Angebot/</a><a href="uebersicht-instrumente-erwachsene.php" target="_self">Erwachsene</a>
            </div>
           
        </div>



        <h1>Private Musikschule Tübingen - Unsere Instrumente</h1>


        <h2>für Erwachsene</h2>

        <div class="contenContainer">
            <img src="../../images/instrumente/mann-auf-klavier.jpg" alt="No Image avaible">
            <a href="klavier.php" target="_self"><?php print_r($postList->getPostTitle(0)); ?> spielen</a>
        </div>


        <div class="contenContainer">
            <img src="../../images/instrumente/frau-mit-geige-in-der-hand.jpg" alt="No Image avaible">
            <a href="geige.php" target="_self"><?php print_r($postList->getPostTitle(1)); ?> spielen</a>
        </div>


        <div class="contenContainer">
            <img src="../../images/instrumente/akkorden-spielen.jpg" alt="No Image avaible">
            <a href="akkordeon.php" target="_self" ><?php print_r($postList->getPostTitle(2)); ?> spielen</a>
        </div>


        <div class="contenContainer">
            <img src="../../images/instrumente/trompete-spielen.jpg" alt="No Image avaible">
            <a href="trompete.php" target="_self" ><?php print_r($postList->getPostTitle(3)); ?> spielen</a>
        </div>


        <div class="contenContainer">
            <img src="../../images/instrumente/gitarre-auf-heangematte.jpg" alt="No Image avaible">
            <a href="gitarre.php" target="_self" ><?php print_r($postList->getPostTitle(4)); ?> spielen</a>
        </div>


        <div class="contenContainer">
            <img src="../../images/instrumente/mann-mit-kontrabas.jpg" alt="No Image avaible">
            <a href="kontrabas.php" target="_self" ><?php print_r($postList->getPostTitle(5)); ?> spielen</a>
        </div>




        
        <div class="contentContainerFooter">
            <a>Impressum</a><a>Datenschutz</a>
           
            <a href="http://localhost/musikschule/logout.php">Ausloggen</a>
            <a href="http://localhost/musikschule/cms/index.php">Admin</a>
        </div>



    </div>



</body>

</html>