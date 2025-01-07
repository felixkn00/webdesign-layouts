<?php 
require_once("../../php/cms/view/publicView/GetPost.php");

$postOBJ = new Posts(3);

?>

<!DOCTYPE html>

<html lang="DE">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Startseite, Musikschule, Tübingen, Unterricht, Akkordeon ">
    <meta name="description" content="Willkommen, dies ist die Webpräsents der Musikschule Tübingen, Akkorden-Unterricht">
    <meta name="author" content="Felix, Giulio, Timo, Emre">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Musikschule Tübingen - Erwachsene <?php echo $postOBJ->getPostTitle(); ?></title>

    <link rel="stylesheet" href="../../styles/styles.css">
    <link rel="stylesheet" href="../../styles/instrument.css">

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
                    <a href="../../index.html" target="_self">Startseite</a>
                    <a href="../../angebote/uebersicht-angebot-kinder-oder-erwachsene.html" target="_self">Übersicht
                        aller Angebote</a>
                    <a href="uebersicht-instrumente-erwachsene.php" target="_self">Angebote
                        für<br>Erwachsene</a>
                    <a href="../kinder/uebersicht-instrumente-kinder.html" target="_self">Angebote für Kinder</a>
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
            <img onclick="openNav()" class="navigation_img" src="../../images/open-navigation.png"
                alt="No Image avaible">
            <div class="navigation_link_helper">
                <a href="../../index.html">Startseite/</a><a href="../uebersicht-angebot-kinder-oder-erwachsene.html"
                    target="_self">Angebot/</a>
                    <a href="uebersicht-instrumente-erwachsene.php" target="_self">Erwachsene/</a>
                    <a href="akkordeon.html" target="_self"><?php echo $postOBJ->getPostTitle(); ?></a>
            </div>
           
        </div>



        <h1>Private Musikschule Tübingen<br>
            - <?php echo $postOBJ->getPostTitle(); ?>-Unterricht für Erwachsene</h1>


        <div id="contentContainer">

        <img src="../../images/instrumente/akkorden-spielen.jpg" alt="No Image avaible">

            <h2>
            <?php echo $postOBJ->getPostTitle(); ?>
            </h2>

        </div>


        <span>
            <b><?php echo $postOBJ->getPostTitle(); ?></b>
            <br>
            <?php echo $postOBJ->getPostDescription(); ?>
        </span>

        <span class="anmeldeinfo">
            <b>JETZT ANMELDEN, wähle ein Datum wann du dich anmelden möchtest für diesen Kurs</b>
            <br ><br>
            <i>Der Kurs findet immer am selben Wochtentag umdie selbe Uhrzeit statt.<br>
            Er geht außerdem immer eine Stunde</i>

        </span>

        <div class="contactForm">
            
            <form>

                <label for="wochentag">Wochentag</label>
                <select name="weekday" id="wochentag">
                    <optgroup label="Wochentag">
                      <option value="monday">Montag</option>
                      <option value="tuestday">Dienstag</option>
                      <option value="wednesday">Mitwoch</option>
                      <option value="thursday">Donnerstag</option>
                      <option value="friday">Freitag</option>
                    </optgroup>
                </select>

                <label for="startuhrzeit">Startuhrzeit</label>
                <select name="startuhrzeit" id="startuhrzeit">
                    <optgroup label="Kursbeginn">
                      <option value="8-00">8:00 Uhr</option>
                      <option value="9-00">9:00 Uhr</option>
                      <option value="10-00">10:00 Uhr</option>
                      <option value="11-00">11:00 Uhr</option>
                      <option value="12-00">12:00 Uhr</option>
                      <option value="13-00">13:00 Uhr</option>
                      <option value="14-00">14:00 Uhr</option>
                      <option value="15-00">15:00 Uhr</option>
                      <option value="16-00">16:00 Uhr</option>
                      <option value="17-00">17:00 Uhr</option>
                      </optgroup>
                  </select>

                  <br><br><br>
                  <h3>Kursdauer 90 Minuten - Preis 35€</h3>
                  
                
                <input type="submit" value="Anmelden">
            </form>

        
        </div>






        <div class="contentContainerFooter">
            <a>Impressum</a><a>Datenschutz</a>
           
            <a href="http://localhost/musikschule/logout.php">Ausloggen</a>
            <a href="http://localhost/musikschule/cms/index.php">Admin</a>
        </div>



    </div>



</body>

</html>