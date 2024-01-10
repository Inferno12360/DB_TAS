<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tas";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO tbl_betrieb (`Name`, `EMail`, `Tel`, `Strasse`, `Hausnummer`,`PLZ`, `Ort`, `Land`)
    VALUES (:ame, :EMail, :Tel, :Strasse, :Hausnummer, :PLZ, :Ort, :Land)");
    $stmt->bindParam(':ame', $_POST['Name']);
    $stmt->bindParam(':EMail', $_POST['EMail']);
    $stmt->bindParam(':Tel', $_POST['Tel']);
    $stmt->bindParam(':Strasse', $_POST['Strasse']);
    $stmt->bindParam(':Hausnummer', $_POST['Hausnummer']);
    $stmt->bindParam(':PLZ', $_POST['PLZ']);
    $stmt->bindParam(':Ort', $_POST['Ort']);
    $stmt->bindParam(':Land', $_POST['Land']);
    $stmt->execute();

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

$conn = null;
header("Location: Betriebs_Tabelle.php");
?>