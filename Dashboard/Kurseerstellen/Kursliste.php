<!-- Zukünftige Kurse -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Datenbanktabelle</title>
</head>
<body>

<h2>Aktive Kurse:</h2>

<table border="1">
    <tr>
        <th>Kursnummer</th>
        <th>Kurstyp</th>
        <th>Datum</th>
        <th>Raumnummer</th>
        <th>Kursart</th>
        <th>Kursgebühr</th>
        <th>Hausnummer</th>
        <th>Straße</th>
        <th>Kursbeschreibung</th>
        <th>Länge</th>
        <th>Maximale Teilnemher</th>
        <th>Minimale Teilnemher</th>
        <th>Teilnehmer Anzeigen</th>
        <th>Kurse bearbeiten</th>
    </tr>

    <?php
    $servername = 'localhost';
    $dbname = 'db_tas';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

        $stmt = $pdo->query("SELECT Kursnummer, Kurstyp, Datum, Raumnummer, Kursart, Kursgebuehr, Hausnummer, Strasse, Kursbeschreibung, Laenge, Max_Teilnehmer, Min_Teilnehmer FROM tbl_kurs");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['Kursnummer']}</td>
                    <td>{$row['Kurstyp']}</td>
                    <td>{$row['Datum']}</td>
                    <td>{$row['Raumnummer']}</td>
                    <td>{$row['Kursart']}</td>
                    <td>{$row['Kursgebuehr']}</td>
                    <td>{$row['Hausnummer']}</td>
                    <td>{$row['Strasse']}</td>
                    <td>{$row['Kursbeschreibung']}</td>
                    <td>{$row['Laenge']}</td>
                    <td>{$row['Max_Teilnehmer']}</td>
                    <td>{$row['Min_Teilnehmer']}</td>
                    <td>
                        <form method='post' action='TeilnehmerAuslesen.php'>
                            <button type='submit' value='{$row['Kursnummer']}' name='Kursnummer'>Teilnehmer Anzeigen lassen</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action='TeilnehmerAuslesen.php'>
                            <button type='submit' value='{$row['Kursnummer']}' name='Kursnummer'>Kurse bearbeiten</button>
                        </form>
                    </td>
                  </tr>";
        }
    } catch (PDOException $e) {
        echo "Fehler: " . $e->getMessage();
    }
    ?>
</table>
</body>
</html>

<!-- Zukünftige Kurse -->

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Datenbanktabelle</title>
</head>
<body>

<h2>Zukünftige Kurse:</h2>

<table border="1">
    <tr>
        <th>Kursnummer</th>
        <th>Kurstyp</th>
        <th>Datum</th>
        <th>Raumnummer</th>
        <th>Kursart</th>
        <th>Kursgebühr</th>
        <th>Hausnummer</th>
        <th>Straße</th>
        <th>Kursbeschreibung</th>
        <th>Länge</th>
        <th>Maximale Teilnemher</th>
        <th>Minimale Teilnemher</th>
        <th>Teilnehmer Anzeigen</th>
        <th>Kurse bearbeiten</th>
    </tr>

    <?php
    $servername = 'localhost';
    $dbname = 'db_tas';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

        $stmt = $pdo->query("SELECT Kursnummer, Kurstyp, Datum, Raumnummer, Kursart, Kursgebuehr, Hausnummer, Strasse, Kursbeschreibung, Laenge, Max_Teilnehmer, Min_Teilnehmer FROM tbl_kurs");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['Kursnummer']}</td>
                    <td>{$row['Kurstyp']}</td>
                    <td>{$row['Datum']}</td>
                    <td>{$row['Raumnummer']}</td>
                    <td>{$row['Kursart']}</td>
                    <td>{$row['Kursgebuehr']}</td>
                    <td>{$row['Hausnummer']}</td>
                    <td>{$row['Strasse']}</td>
                    <td>{$row['Kursbeschreibung']}</td>
                    <td>{$row['Laenge']}</td>
                    <td>{$row['Max_Teilnehmer']}</td>
                    <td>{$row['Min_Teilnehmer']}</td>
                    <td>
                        <form method='post' action='TeilnehmerAuslesen.php'>
                            <button type='submit' value='{$row['Kursnummer']}' name='Kursnummer'>Teilnehmer Anzeigen lassen</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action='TeilnehmerAuslesen.php'>
                            <button type='submit' value='{$row['Kursnummer']}' name='Kursnummer'>Kurse bearbeiten</button>
                        </form>
                    </td>
                  </tr>";
        }
    } catch (PDOException $e) {
        echo "Fehler: " . $e->getMessage();
    }
    ?>
</table>
</body>
</html>

<!-- Alte Kurse -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Datenbanktabelle</title>
</head>
<body>

<h2>Alte Kurse:</h2>

<table border="1">
    <tr>
        <th>Kursnummer</th>
        <th>Kurstyp</th>
        <th>Datum</th>
        <th>Raumnummer</th>
        <th>Kursart</th>
        <th>Kursgebühr</th>
        <th>Hausnummer</th>
        <th>Straße</th>
        <th>Kursbeschreibung</th>
        <th>Länge</th>
        <th>Maximale Teilnemher</th>
        <th>Minimale Teilnemher</th>
        <th>Teilnehmer Anzeigen</th>
        <th>Kurse bearbeiten</th>
    </tr>

    <?php
    $servername = 'localhost';
    $dbname = 'db_tas';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

        $stmt = $pdo->query("SELECT Kursnummer, Kurstyp, Datum, Raumnummer, Kursart, Kursgebuehr, Hausnummer, Strasse, Kursbeschreibung, Laenge, Max_Teilnehmer, Min_Teilnehmer FROM tbl_kurs");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['Kursnummer']}</td>
                    <td>{$row['Kurstyp']}</td>
                    <td>{$row['Datum']}</td>
                    <td>{$row['Raumnummer']}</td>
                    <td>{$row['Kursart']}</td>
                    <td>{$row['Kursgebuehr']}</td>
                    <td>{$row['Hausnummer']}</td>
                    <td>{$row['Strasse']}</td>
                    <td>{$row['Kursbeschreibung']}</td>
                    <td>{$row['Laenge']}</td>
                    <td>{$row['Max_Teilnehmer']}</td>
                    <td>{$row['Min_Teilnehmer']}</td>
                    <td>
                        <form method='post' action='TeilnehmerAuslesen.php'>
                            <button type='submit' value='{$row['Kursnummer']}' name='Kursnummer'>Teilnehmer Anzeigen lassen</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action='TeilnehmerAuslesen.php'>
                            <button type='submit' value='{$row['Kursnummer']}' name='Kursnummer'>Kurse bearbeiten</button>
                        </form>
                    </td>
                  </tr>";
        }
    } catch (PDOException $e) {
        echo "Fehler: " . $e->getMessage();
    }
    ?>
</table>
</body>
</html>