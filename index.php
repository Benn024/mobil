<?php
        define("DB_SERVER", "localhost");
        define("DB_USER", "root");
        define("DB_NAME", "mobil");
        define("DB_PASSWORD", "");
        
        $dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
        
        $username = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'passw', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Telefonbok</title>
        <link rel="stylesheet" href="mobil.css">
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
                    <a href="galleri.php"><div class="box" id="galleri">
                            <h3>Galleri</h3>
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
