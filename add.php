<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_NAME", "mobil");
define("DB_PASSWORD", "");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$filnamn = filter_input(INPUT_POST, 'filnamn', FILTER_SANITIZE_SPECIAL_CHARS);
$namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_SPECIAL_CHARS);
$efternamn = filter_input(INPUT_POST, 'efternamn', FILTER_SANITIZE_SPECIAL_CHARS);
$telefonnummer = filter_input(INPUT_POST, 'telefonnummer', FILTER_SANITIZE_SPECIAL_CHARS);
$mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($_POST["action"])) {
if ($_POST["action"] == "add") {
    $sql = "INSERT INTO `kontakt`(`id`, `filnamn`, `namn`, `efternamn`, `telefonnummer`, `mail`) VALUES ('','" . $filnamn . "','" . $namn . "','" . $efternamn . "','" . $telefonnummer . "','" . $mail . "')";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
}
}

$sql = "SELECT * FROM kontakt";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$telefonbok = $stmt->fetchAll();
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
                    <a href="galleri.php"><div class="box" id="galleri">
                            <h3>Galleri</h3>
                    </div></a>
                    
                    <div id="add">
                    <table>
                        <form method='POST'>
                            <!--<input type="submit" value="+" name="filnamn" class="bild">-->
                            <input type="text" placeholder="filnamn" name="filnamn">
                            <br />
                            <input type="text" placeholder="namn" name="namn">
                            <br />
                            <input type="text" placeholder="efternamn" name="efternamn">
                            <br />
                            <input type="text" placeholder="mail" name="mail">
                            <br />
                            <input type="text" placeholder="telefonnummer" name="telefonnummer">
                            <br />
                            <input type="submit" value="add" name="action">
                        </form>
                    </table>
                    </div>
                    
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
