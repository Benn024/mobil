<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_NAME", "mobil");
define("DB_PASSWORD", "");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_SPECIAL_CHARS);
$efternamn = filter_input(INPUT_POST, 'efternamn', FILTER_SANITIZE_SPECIAL_CHARS);
$telefonnummer = filter_input(INPUT_POST, 'telefonnummer', FILTER_SANITIZE_SPECIAL_CHARS);
$mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Telefonbok</title>
        <link rel="stylesheet" href="mobil.css">
        <link rel="stylesheet" href="add.css">
    </head>
    <body>
        
        <div id="wrapper">
            
            <div id="mobil">
                
                <div id="skarm">
                    <a href="kontaktsida.php"><div class="box" id="kontakt">
                            <h3>Kontakter</h3>
                    </div></a>
                    <a href="add.php"><div class="box" id="addera">
                            <h3>Lägg till kontakt</h3>
                    </div></a>
                    
                    
                </div>
                
                <a href="index.php">
                    <button type="button">
                    <div id="square"></div>
                    </button>
                </a>
                
            </div>
            
        </div>
        
    </body>
</html>
