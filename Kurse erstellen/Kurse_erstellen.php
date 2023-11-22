<?php
print_r($_POST)
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tas";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO tbl_kurs (`Kursnummer`, `Kurstyp`, `Datum`, `Raumnummer`, `Kursart`,`Kursgebuehr`, `Hausnummer`, `Strasse`,`Kursbeschreibung`,`Laenge`,`Max_Teilnehmer`,`Min_teilnehmer`)
    VALUES (:kursnr, :kurstyp, :datum, :raumnummer, :kursart, :kursgebuehr, :hausnummer, :strasse, :kursbeschreibung, :laenge, :max_tn, :min_tn)");
    $stmt->bindParam(':kursnr', $_POST['kursnr']);
    $stmt->bindParam(':kurstyp', $_POST['kurstyp']);
    $stmt->bindParam(':datum', $_POST['datum']);
    $stmt->bindParam(':raumnummer', $_POST['raumnummer']);
    $stmt->bindParam(':kursart', $_POST[ 'kursart']);
    $stmt->bindParam(':kursgebuehr', $_POST['kursgebuehr']);
    $stmt->bindParam(':hausnummer', $_POST['hausnummer']);
    $stmt->bindParam(':strasse', $_POST['strasse']);
    $stmt->bindParam(':kursbeschreibung', $_POST['kursbeschreibung']);
    $stmt->bindParam(':laenge', $_POST['laenge']);
    $stmt->bindParam(':max_tn', $_POST['max_tn']);
    $stmt->bindParam(':min_tn', $_POST['min_tn']);
    $stmt->execute();
  
  
  
    echo "New records created successfully";
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  
  
  $conn = null;
?>
