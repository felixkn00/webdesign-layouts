<?php

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);

    require_once("php/login.php");
    require_once("php/register.php");


?>


<!DOCTYPE html>

<html lang="DE">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Startseite, Musikschule, Tübingen, Klavier, Gittare, Regestrieren und Anmelden">
    <meta name="description" content="Willkommen, dies ist die Webpräsents der Musikschule Tübingen, Regestrieren">
    <meta name="author" content="Felix, Giulio, Timo, Emre">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Musikschule Tübingen - Regestrieren und Anmelden</title>

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/regestrieren.css">

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
                    <a href="./index.html" target="_self">Startseite</a>
                    <a href="angebote/uebersicht-angebot-kinder-oder-erwachsene.html" target="_self">Übersicht aller
                        Angebote</a>
                    <a href="angebote/erwachsene/uebersicht-instrumente-erwachsene.php" target="_self">Angebote
                        für<br>Erwachsene</a>
                    <a href="angebote/kinder/uebersicht-instrumente-kinder.html" target="_self">Angebote für Kinder</a>
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
                <a href="index.html" target="_self">Startseite/</a><a href="regestrieren.php"
                    target="_self">Regestrieren und Anmelden</a>
            </div>

        </div>



        <h1>Private Musikschule Tübingen</h1>


        <div id="contentContainer1">

            <h2>
                Noch nicht dabei?<br>
                Jetzt Regestrieren!

            </h2>


            <img src="images/city.png" alt="No Image avaible">
        </div>












        <div class="contactForm">
            <fieldset>
                <legend>Anmelden</legend>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="loginid">Benutzername</label><input name="loginid" id="loginid" type="text" size="120"
                    placeholder="Dein Benutzername">

                <label for="kennwort">Passwort</label><input name="kennwort" type="kennwort" id="kennwort" size="120"
                    placeholder="Dein Passwort">


                <input type="submit" value="Einloggen">

                <br>
                <br>
            </form>
            </fieldset>
            <p>Wenn bereits ein Konto bei uns haben, loggen Sie sich ein.
                <br><br>
                Wenn Sie kein Konto haben, regestireren Sie sich jetzt.
            </p>
        </div>

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



        <div class="contentContainerFooter">
            <a>Impressum</a><a>Datenschutz</a>
           
            <a href="http://localhost/musikschule/logout.php">Ausloggen</a>
            <a href="http://localhost/musikschule/cms/index.php">Admin</a>
        </div>

    </div>



</body>

</html>