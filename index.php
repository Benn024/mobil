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
                    
                    
                    
                </div>
                
                <button type="button">
                    <div id="square"></div>
                </button>
                
            </div>
            
        </div>
        
    </body>
</html>
