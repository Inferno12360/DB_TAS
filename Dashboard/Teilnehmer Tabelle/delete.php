<?php
$host = 'localhost';
$dbname = 'db_tas';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    if (isset($_POST['PK_Teilnehmer'])) {
        $id = $_POST['PK_Teilnehmer'];

        $stmt = $pdo->prepare("DELETE FROM tbl_teilnehmer WHERE PK_Teilnehmer = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Datensatz wurde erfolgreich gelöscht";
        } else {
            echo "Fehler beim Löschen des Datensatzes";
        }
    } else {
        echo "Ungültige Anfrage";
    }
} catch (PDOException $e) {
    echo "Fehler: " . $e->getMessage();
}
?>
