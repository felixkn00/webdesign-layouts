<!DOCTYPE html>

<html lang="DE">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Startseite, Musikschule, Tübingen, Klavier,Unterricht, Singen">
    <meta name="description" content="Willkommen, dies ist die Webpräsents der Musikschule Tübinge, Singen-Unterricht">
    <meta name="author" content="Felix, Giulio, Timo, Emre">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Musikschule Tübingen - Kinder Singen</title>

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
                    <a href="../erwachsene/uebersicht-instrumente-erwachsene.php" target="_self">Angebote
                        für<br>Erwachsene</a>
                    <a href="uebersicht-instrumente-kinder.html" target="_self">Angebote für Kinder</a>
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
                    target="_self">Angebot/</a><a href="uebersicht-instrumente-kinder.html" target="_self"
                    >Kinder/</a><a href="singen.html" target="_self">Singen</a>
            </div>
           
        </div>



        <h1>Private Musikschule Tübingen<br>
            - Singen-Unterricht für Kinder</h1>


        <div id="contentContainer">

        <?php 

    require_once("../../php/auth.php");

?>

            <img src="../../images/singen.jpg" alt="No Image avaible">

            <h2>
                Singen
            </h2>

        </div>


        <span>
            <b>Über den Gesang</b>
            <br>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
            sed diam nonumy eirmod tempor in
            vidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            At vero eos et accusam
            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takima
            ta sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscin
            g elitr, sed diam nonumy eirmod tempor invidunt
            ut la
            bore et dolore magna aliquyam erat, sed diam
            voluptua. At
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
                  <h3>Kursdauer</h3>
                  <label for="kursdauer45">45 Minuten</label>
                  <input type="radio" id="kursdauer45" name="length" value="45-min" checked="checked">
                  <label for="kursdauer60">60 Minuten</label>
                  <input type="radio" id="kursdauer60" name="length" value="60-min">
                  <label for="kursdauer90">90 Minuten</label>
                  <input type="radio" id="kursdauer90" name="length" value="90-min">
                
                <input type="submit" value="Anmelden">
            </form>


            <div class="preisliste">
                <h3>Preisliste</h3>
                <ul>
                    <li>Kursdauer 45 Minuten - 15€</li>
                    <li>Kursdauer 60 Minuten - 20€</li>
                    <li>Kursdauer 90 Minuten - 30€</li>
                </ul>
                </div>

        
        </div>






        <div class="contentContainerFooter">
            <a>Impressum</a><a>Datenschutz</a>
           
            <a href="http://localhost/musikschule/logout.php">Ausloggen</a>
            <a href="http://localhost/musikschule/cms/index.php">Admin</a>
        </div>



    </div>



</body>

</html>