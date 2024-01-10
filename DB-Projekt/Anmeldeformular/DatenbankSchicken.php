<?php
print_r($_POST);
echo "Hello";
?>
         <h> Weitere Person Hinzufügen? <h>
         <form action="GroßesAnmeldeformular.php" method="post">
         <button type="submit" name="zurück" > Hier Klicken</button>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tas";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if($_POST["submit"] == "add_Anmedlung")
  {
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
}

if($_POST["submit"] == "add_dozent")
{
  $stmt = $conn->prepare("INSERT INTO tbl_dozent (`Vorname`, `Nachname`, `Anrede`, `Kuerzel`, `Strasse`,`Hausnummer`, `Steuernummer`, `PLZ`, `Ort`, `Land`)
  VALUES (:vorname, :nachname, :geschlecht, :Kurzel, :strasse, :hnummer, :snummer, :postleitzahl, :ort, :Land)");
  $stmt->bindParam(':vorname', $_POST['vorname']);
  $stmt->bindParam(':nachname', $_POST['nachname']);
  $stmt->bindParam(':geschlecht', $_POST['geschlecht']);
  $stmt->bindParam(':Kurzel', $_POST['Kurzel']);
  $stmt->bindParam(':strasse', $_POST['strasse']);
  $stmt->bindParam(':hnummer', $_POST['hnummer']);
  $stmt->bindParam(':snummer', $_POST['snummer']);
  $stmt->bindParam(':postleitzahl', $_POST['postleitzahl']);
  $stmt->bindParam(':ort', $_POST['ort']);
  $stmt->bindParam(':Land', $_POST['Land']);
  $stmt->execute();
}

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}


$conn = null;
?>