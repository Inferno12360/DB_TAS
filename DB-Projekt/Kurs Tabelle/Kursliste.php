<!-- Aktive Kurse -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Datenbanktabelle</title>
</head>
<style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-top: 20px;
            text-align: left;
            width: 80%;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .teb{
            text-align: center;
        }
        
        .centered-button {
            padding: 10px 20px;
            font-size: 16px;
        }
        .logo{
            margin-right: 10000px;
        }
    </style>
<body>
<div class="logo">
<a href="http://localhost/DB-Projekt"><img src="logo.png" alt="HTML tutorial" style="width:100px;height:80px;"></a>
</div>
    
<form action="Kurserstellenfomular.php">
<button type='submit' value='test' name='Kurserstellenfomular.php'>Neuen Kurs Erstellen</button>
</form>

<h2>Aktive Kurse:</h2>

<table border="1">
    <tr>
        <th>KursID</th>
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
        <th>Kurse Löschen</th>
        <th>Dozent Anzeigen</th>
    </tr>

    <?php
    $servername = 'localhost';
    $dbname = 'db_tas';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);

        $stmt = $pdo->query("SELECT PK_Kurs, Kursnummer, Kurstyp, Datum, Raumnummer, Kursart, Kursgebuehr, Hausnummer, Strasse, Kursbeschreibung, Laenge, Max_Teilnehmer, Min_Teilnehmer FROM tbl_kurs");

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['PK_Kurs']}</td>
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
                            <button type='submit' value='{$row['Kursnummer']}' name='Kursnummer'>Teilnehmer Anzeigen</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action='Kursloeschen.php'>
                            <button type='submit' value='{$row['PK_Kurs']}' name='PK_Kurs'>Kurse Löschen</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action='Dozent.php'>
                            <button type='submit' value='{$row['Kursnummer']}' name='Kursnummer'>Dozent Anzeigen</button>
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