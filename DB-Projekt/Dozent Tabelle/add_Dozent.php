<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tas";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
    $stmt = $conn->prepare("INSERT INTO tbl_dozent (`Vorname`, `Nachname`, `Anrede`, `Kuerzel`,  `Strasse`, `Hausnummer`,`Steuernummer`,`PLZ`, `Ort`, `Land`)
    VALUES (:vorname, :nachname, :anrede, :kuerzel, :strasse, :hausnummer, :steuernummer, :plz, :stadt, :land)");
    $stmt->bindParam(':vorname', $_POST['vorname']);
    $stmt->bindParam(':nachname', $_POST['nachname']);
    $stmt->bindParam(':anrede', $_POST['anrede']);
    $stmt->bindParam(':kuerzel', $_POST['kuerzel']);
    $stmt->bindParam(':strasse', $_POST['strasse']);
    $stmt->bindParam(':hausnummer', $_POST['hausnummer']);
    $stmt->bindParam(':steuernummer', $_POST['steuernummer']);
    $stmt->bindParam(':plz', $_POST['plz']);
    $stmt->bindParam(':stadt', $_POST['stadt']);
    $stmt->bindParam(':land', $_POST['land']);
    $stmt->execute();

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  
  
  $conn = null;

  header("Location: Dozent_Tabelle.php");
?>


