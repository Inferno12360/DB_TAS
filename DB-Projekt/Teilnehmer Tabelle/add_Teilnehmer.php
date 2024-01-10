<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tas";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO tbl_Teilnehmer (`Vorname`, `Nachname`, `Anrede`, `EMail`, `Telefon`, `Hausnummer`, `Strasse`, `Rechnungsstellung`, `PLZ`, `Ort`, `Land`)
    VALUES (:Vorname, :Nachname, :Anrede, :EMail, :Telefon, :Hausnummer, :Strasse, :Rechnungsstellung, :PLZ, :Ort, :Land)");
    $stmt->bindParam(':Vorname', $_POST['Vorname']);
    $stmt->bindParam(':Nachname', $_POST['Nachname']);
    $stmt->bindParam(':Anrede', $_POST['Anrede']);
    $stmt->bindParam(':EMail', $_POST['EMail']);
    $stmt->bindParam(':Telefon', $_POST['Telefon']);
    $stmt->bindParam(':Hausnummer', $_POST['Hausnummer']);
    $stmt->bindParam(':Strasse', $_POST['Strasse']);
    $stmt->bindParam(':Rechnungsstellung', $_POST['Rechnungsstellung']);
    $stmt->bindParam(':PLZ', $_POST['PLZ']);
    $stmt->bindParam(':Ort', $_POST['Ort']);
    $stmt->bindParam(':Land', $_POST['Land']);
    $stmt->execute();

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

$conn = null;
header("Location: Teilnehmer_Tabelle.php");
?>