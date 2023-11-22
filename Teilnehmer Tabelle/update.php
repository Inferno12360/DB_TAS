<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Daten aktualisieren</title>
</head>
<body>

<?php
// Verbindung zur Datenbank herstellen (ersetze die Platzhalter mit deinen eigenen Daten)
$host = 'localhost';
$dbname = 'db_tas';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    // Überprüfen, ob POST-Daten vorhanden sind
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Überprüfen, ob die erforderlichen POST-Parameter vorhanden sind
        if (isset($_POST['PK_Teilnehmer'], $_POST['Vorname'], $_POST['Nachname'], $_POST['Anrede'], $_POST['EMail'], $_POST['Telefon'], $_POST['Strasse'], $_POST['Hausnummer'], $_POST['Rechnungsstellung'], $_POST['PLZ'], $_POST['Ort'], $_POST['Land']))
        {
            $id = $_POST['PK_Teilnehmer'];
            $vorname = $_POST['Vorname'];
            $nachname = $_POST['Nachname'];
            $Anrede = $_POST['Anrede'];
            $EMail = $_POST['EMail'];
            $Telefon = $_POST['Telefon'];
            $Strasse = $_POST['Strasse'];
            $Hausnummer = $_POST['Hausnummer'];
            $Rechnungsstellung = $_POST['Rechnungsstellung'];
            $PLZ = $_POST['PLZ'];
            $Ort = $_POST['Ort'];
            $Land = $_POST['Land'];


            // SQL-Abfrage, um den Datensatz zu aktualisieren
            $stmt = $pdo->prepare("UPDATE tbl_teilnehmer SET Vorname = :Vorname, Nachname = :Nachname, Anrede = :Anrede, EMail = :EMail, Telefon = :Telefon, Strasse = :Strasse, Hausnummer = :Hausnummer, Rechnungsstellung = :Rechnungsstellung, PLZ = :PLZ, Ort = :Ort, Land = :Land WHERE PK_Teilnehmer = :PK_Teilnehmer");
            $stmt->bindParam(':PK_Teilnehmer', $id, PDO::PARAM_INT);
            $stmt->bindParam(':Vorname', $vorname, PDO::PARAM_STR);
            $stmt->bindParam(':Nachname', $nachname, PDO::PARAM_STR);
            $stmt->bindParam(':Anrede', $Anrede, PDO::PARAM_STR);
            $stmt->bindParam(':EMail', $EMail, PDO::PARAM_STR);
            $stmt->bindParam(':Telefon', $Telefon, PDO::PARAM_STR);
            $stmt->bindParam(':Strasse', $Strasse, PDO::PARAM_STR);
            $stmt->bindParam(':Hausnummer', $Hausnummer, PDO::PARAM_STR);
            $stmt->bindParam(':Rechnungsstellung', $Rechnungsstellung, PDO::PARAM_STR);
            $stmt->bindParam(':PLZ', $PLZ, PDO::PARAM_STR);
            $stmt->bindParam(':Ort', $Ort, PDO::PARAM_STR);
            $stmt->bindParam(':Land', $Land, PDO::PARAM_STR);

            if ($stmt->execute()) {
                echo "Datensatz wurde erfolgreich aktualisiert";
            } else {
                echo "Fehler beim Aktualisieren des Datensatzes";
            }
        } else {
            echo "Ungültige Parameter";
        }
    } else {
        // Formular zum Abrufen der Benutzereingabe für die Aktualisierung
        echo "<h2>Daten aktualisieren</h2>";
        echo "<form method='post' action='update.php'>";
        echo "Vorname: <input type='text' name='Vorname' required><br>";
        echo "Nachname: <input type='text' name='Nachname' required><br>";
        echo "Anrede: <input type='text' name='Anrede' required><br>";
        echo "EMail: <input type='email' name='EMail' required><br>";
        echo "Telefon: <input type='text' name='Telefon' required><br>";
        echo "Strasse: <input type='text' name='Strasse' required><br>";
        echo "Hausnummer: <input type='text' name='Hausnummer' required><br>";
        echo "Rechnungsstellung: <input type='text' name='Rechnungsstellung' required><br>";
        echo "PLZ: <input type='text' name='PLZ' required><br>";
        echo "Ort: <input type='text' name='Ort' required><br>";
        echo "Land: <input type='text' name='Land' required><br>";
        echo "<button type='submit'>Aktualisieren</button>";
        echo "</form>";
    }
} catch (PDOException $e) {
    echo "Fehler: " . $e->getMessage();
}
?>

</body>
</html>
