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
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
<body>
<h2>Datenbanktabelle</h2>

<form action="Teilnehmer_erstellen.html" method="post">
    <button type="submit">Teilnehmer erstellen</button>
    </form>
    
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
</body>
</html>
