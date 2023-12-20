<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Datenbanktabelle</title>
</head>
<body>

<h2>Teilnehmer aus</h2>

<table border="1">
    <tr>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Anrede</th>
        <th>EMail</th>
        <th>Telefon</th>
        <th>Hausnummer</th>
        <th>Strasse</th>
        <th>Rechnungsstelle</th>
        <th>PLZ</th>
        <th>Ort</th>
        <th>Land</th>
        <th>Rechnung Erstellen</th>
    </tr>
<pre>
<?php
print_r($_POST);
?>
</pre>

<?php
    $servername = 'localhost';
    $dbname = 'db_tas';
    $user = 'root';
    $password = '';

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT tbl_teilnehmer.Vorname as Teilnehmer_Vorname, tbl_teilnehmer.Nachname as Teilnehmer_Nachname, tbl_teilnehmer.Anrede as Teilnehmer_Anrede, tbl_teilnehmer.EMail as Teilnehmer_EMail, tbl_teilnehmer.Telefon as Teilnehmer_Telefon,tbl_teilnehmer.Hausnummer as Teilnehmer_Hausnummer, tbl_teilnehmer.Strasse as Teilnehmer_Strasse, tbl_teilnehmer.Rechnungsstellung as Teilnehmer_Rechnungsstellung, tbl_teilnehmer.PLZ as Teilnehmer_PLZ, tbl_teilnehmer.PLZ as Teilnehmer_PLZ, tbl_teilnehmer.Ort as Teilnehmer_Ort, tbl_teilnehmer.Land as Teilnehmer_Land FROM tbl_kurs LEFT JOIN tbl_kurs_teilnehmer ON tbl_kurs.PK_Kurs = tbl_kurs_teilnehmer.FK_Kurs LEFT JOIN tbl_teilnehmer ON FK_Teilnehmer = PK_Teilnehmer LEFT JOIN tbl_kurs_dozent ON tbl_kurs_dozent.FK_Kurs = tbl_kurs.PK_Kurs LEFT JOIN tbl_dozent ON FK_Dozent = PK_Dozent WHERE Kursnummer = :Kursnummer");
    $stmt->bindparam(":Kursnummer", $_POST["Kursnummer"]);
    $stmt->execute();
    #$result = $stmt->fetchAll();
    #print_r($result);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['Teilnehmer_Vorname']}</td>
                <td>{$row['Teilnehmer_Nachname']}</td>
                <td>{$row['Teilnehmer_Anrede']}</td>
                <td>{$row['Teilnehmer_EMail']}</td>
                <td>{$row['Teilnehmer_Telefon']}</td>
                <td>{$row['Teilnehmer_Hausnummer']}</td>
                <td>{$row['Teilnehmer_Strasse']}</td>
                <td>{$row['Teilnehmer_Rechnungsstellung']}</td>
                <td>{$row['Teilnehmer_PLZ']}</td>
                <td>{$row['Teilnehmer_Ort']}</td>
                <td>{$row['Teilnehmer_Land']}</td>
                <td>
                        <form method='post' action='RechnungErstellen.php'>
                            <button type='submit' name='Kursnummer'>Rechnung Erstellen</button>
                        </form>
                    </td>
              </tr>";
    }
?>
</table>
</body>
</html>