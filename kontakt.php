<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

require_once("php/guestbookInsert.php");

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

            <h2>Kontaktbereich - Formular Auswertung</h2>


        </div>

            
      

        
     
        <?php 

if(@$_GET['name'] === ""){
    ?>
        <br /><br />
        <div class="errorMesInput">Bitte gib einen Namen ein</div>
        <br /><br />
    <?php
}

if(@$_GET['telephone'] === ""){
    ?>
    <br /><br />
    <div class="errorMesInput">Bitte gib eine Telefonnummer an</div>
    <br /><br />
    <?php
    
}

if(@$_GET['ort'] === ""){
    ?>
    <br /><br />
    <div class="errorMesInput">Bitte gib einen Ort an</div>
    <br /><br />
    <?php
}

if($_GET['plz'] === ""){
    ?>
    <br /><br />
    <div class="errorMesInput">Bitte gib eine Postleitzahl an</div>
    <br /><br />
    <?php
}

if(@$_GET['str'] === ""){
    ?>
    <br /><br />
    <div class="errorMesInput">Bitte gib eine Straße an</div>
    <br /><br />
    
    <?php
}

if(@$_GET['str-nr'] === ""){
    ?>
    <br /><br />
    <div class="errorMesInput">Bitte gib eine Hausnummer an</div>
    <br /><br />
    
    <?php
}

if(@$_GET['email'] === ""){
    ?>
    <br /><br />
    <div class="errorMesInput">Bitte gib eine Email-Adresse an</div>
    <br /><br />

    <?php
}

if(@$_GET['message'] === ""){
    ?>
    <br /><br />
    <div class="errorMesInput">Bitte gib eine Nachricht an</div>
    <br /><br />

    <?php
}





if($_GET['name'] != "" and $_GET['telephone'] != "" and $_GET['ort'] != "" and $_GET['plz'] != ""){
    header("Location: kontaktFormAuswertung.php?name=".$_GET['name']."&telephone=".$_GET['telephone']."&ort=".$_GET['ort']."&plz=".$_GET['plz']);
}

            
            
            
            
           


            if($_GET['name'] == "" or $_GET['telephone'] == "" or $_GET['ort'] == "" or $_GET['plz'] == "" and $_GET['str'] == "" or $_GET['email'] or $_GET['message'] == "" ){ 
            
                

                
            
               ?>
                
    
            

               

                <div class="contactForm">
                    <h2>Kontaktformular</h2>
                    <form method="get" action="kontakt.php">
                        
                        <label for="name">Name</label><input name="name" value="<?php echo @$_GET['name'] ?>" id="name" type="text" size="120" placeholder="Dein Name">
                        <?php 


                        ?>
                        
                        <label for="telephone">Telefon</label><input name="telephone" value="<?php echo @$_GET['telephone'] ?>" id="telephone" type="text" size="120" placeholder="Deine Telefonnummer">
                        <?php 

                        

                        ?>

                        <label for="ort">Ort</label><input name="ort" value="<?php echo @$_GET['ort'] ?>" type="text" id="ort" size="120" placeholder="Dein Wohnort">
                        <?php 

                        

                        ?>

                        <label for="plz">PLZ</label><input name="plz" value="<?php echo @$_GET['plz'] ?>" type="text" id="plz" size="25" placeholder="Deine Postleitzahl">
                        <?php 
                            
                            

                        ?>
                        
                        <label for="str">Straße</label><input name="str" value="<?php echo @$_GET['str'] ?>" type="text" id="str" size="120" placeholder="Deine Straße"><input name="str-nr" value="<?php echo @$_GET['str-nr'] ?>" class="contactFormiInputSpecial" placeholder="Nr">
                        <?php 
                           


                        ?>

                        <label for="email">Email</label><input name="email" value="<?php echo @$_GET['email'] ?>" type="email" id="email" size="120" placeholder="Deine Email-Adresse">
                        <?php 
                            
                        ?>
                        <textarea name="message" placeholder="Deine Nachricht an uns">
                        <?php echo @$_GET['message'] ?>
                        </textarea>
                        <?php 
                            

                        ?>

                        <input type="submit" value="Absenden">
                    </form>
                </div>
<?php
            }
            ?>

           
        <p id="ohterContactOptions">
        <a href="mailto:micel@musikschule-tuebingen.de">Email schreiben</a>
        <a href="tel:+499123456789">Jetzt anrufen</a>
        </p>



        <div class="contactForm">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" >
                <h2>Geastebuch Eintrag erstellen</h2>
                    <label for="g_vorname">Vorname</label>
                    <input type="text" name="g_vorname" id="g_vorname" value="<?php echo @$_GET['g_vorname'] ?>" />
                    <?php
                    
                        if($_GET['g_vorname'] === ""){
                        
                            ?>
                            <div class="errorMesInput">Bitte gib deinen Vornamen an</div>
                            <?php
                        
                        }

                    ?>

                    <label for="g_nachname">Nachname</label>
                    <input type="text" name="g_nachname" id="g_nachname" value="<?php echo @$_GET['g_nachname'] ?>" />
                    <?php 
                    
                        if($_GET['g_nachname'] === ""){
                        
                            ?>
                            <div class="errorMesInput">Bitte gib deinen Nachnamen an</div>
                            <?php
                        
                        }

                    ?>

                    <label for="g_anliegen">Anliegen</label>
                    <textarea name="g_anliegen" id="anliegen" ><?php echo @$_GET['g_anliegen'] ?></textarea>
                    <?php 
                    
                        if($_GET['g_anliegen'] === ""){
                        
                            ?>
                            <div class="errorMesInput">Bitte gib dein Anliegen an</div>
                            <?php
                        
                        }

                    ?>


                    <input type="date" name="g_date" id="g_date" style="display: none;" value="<?php echo date('Y-m-d'); ?>" />

                    <input type="submit" />

                </form>
            </div>



            <div>
                <h2>Gaestebuch</h2>
                <?php
                require_once("php/guestbookRead.php");
                ?>
            </div>



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