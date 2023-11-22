<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Datenbanktabelle</title>
</head>
<body>

<h2>Datenbanktabelle</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Anrede</th>
        <th>EMail</th>
        <th>Telefon</th>
        <th>Strasse</th>
        <th>Hausnummer</th>
        <th>Rechnungsstellung</th>
        <th>PLZ</th>
        <th>Ort</th>
        <th>Land</th>
    </tr>

    <?php
    // Verbindung zur Datenbank herstellen (ersetze die Platzhalter mit deinen eigenen Daten)
    $host = 'localhost';
    $dbname = 'db_tas';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $stmt = $pdo->query("SELECT PK_Teilnehmer, Vorname, Nachname, Anrede, EMail, Telefon, Strasse, Hausnummer, Rechnungsstellung, PLZ, Ort, Land FROM tbl_teilnehmer");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['PK_Teilnehmer']}</td>
                    <td>{$row['Vorname']}</td>
                    <td>{$row['Nachname']}</td>
                    <td>{$row['Anrede']}</td>
                    <td>{$row['EMail']}</td>
                    <td>{$row['Telefon']}</td>
                    <td>{$row['Strasse']}</td>
                    <td>{$row['Hausnummer']}</td>
                    <td>{$row['Rechnungsstellung']}</td>
                    <td>{$row['PLZ']}</td>
                    <td>{$row['Ort']}</td>
                    <td>{$row['Land']}</td>
                    <td>
                        <form method='post' action='delete.php'>
                            <input type='hidden' name='PK_Teilnehmer' value='{$row['PK_Teilnehmer']}'>
                            <button type='submit'>Löschen</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action='update.php'>
                        <input type='hidden' name='PK_Teilnehmer' value='{$row['PK_Teilnehmer']}'>
                        <button type='submit'>Ändern</button>
                    </td>
                  </tr>";
        }
    } catch (PDOException $e) {
        echo "Fehler: " . $e->getMessage();
    }
    ?>

</table>
         <form method='post' action='add.php'>  
         <div class="form-group">
         <label for="vorname">Vorname:</label>
         <input type="text" id="vorname" name="vorname" >
         </div>
         <div class="form-group">
         <label for="nachname">Nachname:</label>
         <input type="text" id="nachname" name="nachname" >
         </div>
         <div class="form-group">
         <label for="email">E-Mail:</label>
         <input type="email" id="email" name="email" >
         </div>
         <div class="form-group">
         <label for="telefon">Telefonnummer:</label>
         <input type="tel" id="telefon" name="telefon" >
         </div>
         <label for="geschlecht">Geschlecht:</label>
         <select id="geschlecht" name="geschlecht">
         <option value="Herr">Herr</option>
         <option value="Frau">Frau</option>
        </div>
         <label>Geschäftstyp:</label>
         <input type="radio" id="privat" name="geschaeftstyp" value="privat" >
         <label for="privat">Privat</label>
         <input type="radio" id="firma" name="geschaeftstyp" value="firma" >
         <label for="firma">Firma</label>
         <div class="form-group">
         <label for="Adresse">Straße</label>
         <input type="text" id="Strasse"  placeholder="Musterstraße" name="Strasse" >
         </div>
         <div class="form-group">
         <label for="Adresse">Nummer</label>
         <input type="text" id="Nummer"  placeholder="6" name="NummerH" >
         </div>
         <div class="form-group">
         <label for="Ort">Ort</label>
         <input type="text" id="Ort"  placeholder="Land" name="Land" >
         <input type="text" id="Ort"  placeholder="Stadt" name="Stadt" >
         <input type="text" id="Ort"  placeholder="PLZ" name="PLZ" >
         </div>
         </select>
         
            <button type='submit'>hinzufügen</button>
        </form>

</body>
</html>
