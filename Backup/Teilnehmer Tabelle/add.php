<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tas";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $stmt = $conn->prepare("INSERT INTO tbl_betrieb (`Name`, `EMail`, `Tel`, `Strasse`, `Hausnummer`,`PLZ`, `Ort`, `Land`)
    VALUES (:BetriebN, :EmailA, :telefon, :firmenadresse, :NummerH, :PLZ, :Stadt, :Land)");
    $stmt->bindParam(':BetriebN', $_POST['BetriebN']);
    $stmt->bindParam(':EmailA', $_POST['EmailA']);
    $stmt->bindParam(':telefon', $_POST['telefon']);
    $stmt->bindParam(':firmenadresse', $_POST['firmenadresse']);
    $stmt->bindParam(':NummerH', $_POST['NummerH']);
    $stmt->bindParam(':PLZ', $_POST['PLZ']);
    $stmt->bindParam(':Stadt', $_POST['Stadt']);
    $stmt->bindParam(':Land', $_POST['Land']);
    $stmt->execute();
  
    $stmt = $conn->prepare("INSERT INTO tbl_teilnehmer (`Vorname`, `Nachname`, `Anrede`, `EMail`, `Telefon`, `Hausnummer`, `Strasse`, `Rechnungsstellung`,`PLZ`, `Ort`, `Land`)
    VALUES (:vorname, :nachname, :geschlecht, :email, :telefon, :NummerH, :Strasse, :geschaeftstyp, :PLZ, :Stadt, :Land)");
    $stmt->bindParam(':vorname', $_POST['vorname']);
    $stmt->bindParam(':nachname', $_POST['nachname']);
    $stmt->bindParam(':geschlecht', $_POST['geschlecht']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':telefon', $_POST['telefon']);
    $stmt->bindParam(':NummerH', $_POST['NummerH']);
    $stmt->bindParam(':Strasse', $_POST['Strasse']);
    $stmt->bindParam(':geschaeftstyp', $_POST['geschaeftstyp']);
    $stmt->bindParam(':PLZ', $_POST['PLZ']);
    $stmt->bindParam(':Stadt', $_POST['Stadt']);
    $stmt->bindParam(':Land', $_POST['Land']);
    $stmt->execute();
  
    echo "New records created successfully";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  
  
  $conn = null;
  ?>


