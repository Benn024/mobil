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

if ($_POST["action"] == "Radera") {
    $sql = "DELETE FROM kontakt WHERE id='" . $_POST["id"] . "'";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
}
$id=0;
if ($_POST["action"] == "Edit") {
    $id = $_POST["id"];
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
        <link rel="stylesheet" href="kontakt.css">
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
                    <?php
                    echo "<table class='bord' border='1'>";
                    foreach ($telefonbok as $personer) {
                        echo "<form method='POST' class='knapp';>";
                        echo "<tr>";
                        echo "<td>";
                        echo $personer["namn"];
                        echo "</td>";
                        echo "<td>";
                        echo $personer["efternamn"];
                        echo "</td>";
                        echo "<td>";
                        echo $personer["telefonnummer"];
                        echo "</td>";
                        echo "<td>";
                        echo $personer["mail"];
                        echo "</td>";
                        echo "<td>";
                        echo "<input type='submit' value='Radera' name='action'>";
                        echo "<input type='hidden' value='" . $personer["id"] . "' name='id'>";
                        echo "<input type='submit' value='Edit' name='action'>";
                        echo "<input type='hidden' value='" . $personer["id"] . "' name='id'>";
                        echo "</td>";
                        echo "</tr>";
                        echo "</form>";
                        
                        if($personer["id"]==$id){
                            echo "<tr>";
                            echo "<td>";
                            
                            echo "tjafan";
                            
                            echo "</td>";
                            echo "</tr>";
                        }
                    }
                    echo "</table>";
                    ?>

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
