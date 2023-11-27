<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname= "db_tas";
    
        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
        //echo "Connected successfully";
        //echo "Connection failed: " . $e->getMessage();

        $stmt = $conn->prepare("INSERT INTO tbl_rechnung (Art_der_Leistung, Rechnungsnummer, Kursdatum, Betrag, Bezahldatum, Zahlungsziel, Bestellnummer, Mahnungsdatum, FK_Betrieb, FK_Teilnehmer)
        VALUES (:Art_der_Leistung :Rechnungsnummer :Kursdatum :Betrag :Bezahldatum :Zahlungsziel :Bestellnummer :Mahnungsdatum :FK_Betrieb FK_Teilnehmer)");
        $stmt->bindParam(':Art_der_Leistung', $Art_der_Leistung);
        $stmt->bindParam(':Rechnungsnummer', $Rechnungsnummer);
        $stmt->bindParam(':Kursdatum', $Kursdatum);
        $stmt->bindParam(':Betrag', $Betrag);
        $stmt->bindParam(':Bezahldatum', $Bezahldatum);
        $stmt->bindParam(':Zahlungsziel', $Zahlungsziel);
        $stmt->bindParam(':Bestellnummer', $Bestellnummer);
        $stmt->bindParam(':Mahnungsdatum', $Mahnungsdatum);
        $stmt->bindParam(':FK_Betrieb', $FK_Betrieb);
        $stmt->bindParam(':FK_Teilnehmer', $FK_Teilnehmer);


</body>
</html>