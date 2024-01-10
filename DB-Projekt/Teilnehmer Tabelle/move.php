<?php
print_r($_POST);
?>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$dbname = 'db_tas';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Debug-Ausgabe für $_POST (kann später entfernt werden)
        var_dump($_POST);

        if (isset($_POST['PK_Teilnehmer']) && !empty($_POST['PK_Teilnehmer'])) {
            $PK_Teilnehmer = $_POST['PK_Teilnehmer'];

            // Holen Sie die Daten des ausgewählten Teilnehmers
            $stmt = $pdo->prepare("SELECT * FROM tbl_teilnehmer WHERE PK_Teilnehmer = :PK_Teilnehmer");
            $stmt->bindParam(':PK_Teilnehmer', $PK_Teilnehmer);
            $stmt->execute();
            $teilnehmerData = $stmt->fetch(PDO::FETCH_ASSOC);

            // Fügen Sie die Daten in die Ziel-Tabelle (tbl_delete) ein
            $stmtInsert = $pdo->prepare("INSERT INTO tbl_delete (Vorname, Nachname, Anrede, EMail, Telefon, Strasse, Hausnummer, Rechnungsstellung, PLZ, Ort, Land) VALUES (:Vorname, :Nachname, :Anrede, :EMail, :Telefon, :Strasse, :Hausnummer, :Rechnungsstellung, :PLZ, :Ort, :Land)");
            $stmtInsert->execute($teilnehmerData);

            // Löschen Sie den Teilnehmer aus der Quell-Tabelle (tbl_teilnehmer)
            $stmtDelete = $pdo->prepare("DELETE FROM tbl_teilnehmer WHERE PK_Teilnehmer = :PK_Teilnehmer");
            $stmtDelete->bindParam(':PK_Teilnehmer', $PK_Teilnehmer);
            $stmtDelete->execute();

            // Erfolgsmeldung oder Weiterleitung
            echo "Teilnehmer erfolgreich verschoben.";
        } else {
            echo "Ungültige Parameter übergeben.";
        }
    }
} catch (PDOException $e) {
    echo "Datenbankfehler: " . $e->getMessage();
    die();
}
?>