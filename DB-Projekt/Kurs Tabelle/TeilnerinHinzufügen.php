<?php
print_r($_POST);
?>
</pre>
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

        .teb{
            text-align: center;
        }

        .centered-button {
            padding: 10px 20px;
            font-size: 16px;
        }

        .sort-form {
            margin-top: 20px;
            text-align: left;
            width: 80%;
            margin: 0 auto;
        }

        .sort-form select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
    </style>
<body>
<h2>Datenbanktabelle</h2>

<form action="../Teilnehmer erstellen/Teilnehmer_erstellen.html" method="post">
    <div class="teb"> 
        <button type="submit" class="centered-button">Teilnehmer erstellen</button>
    </div>
</form>

<form class="sort-form">
        <div class="form-group">
            <label for="sort">Sortieren nach:</label>
            <select id="sort" name="sort">
                <option value="id">ID</option>
                <option value="alphabet">Nachname, Vorname</option>
                <option value="vorname">Vorname</option>
            </select>
        </div>
        <button type="button" onclick="sortTable()">Sortieren</button>
    </form>
    <script>
        function sortTable() {
            var sortOption = document.getElementById("sort").value;

            var currentUrl = window.location.href;
            var separator = currentUrl.indexOf("?") === -1 ? "?" : "&";
            var newUrl = currentUrl + separator + "sort=" + sortOption;

            window.location.href = newUrl;
        }
    </script>       
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
                        <form method='post' action='TeilnehmerininHinzufügen.php'>
                            <input type='hidden' name='PK_Teilnehmer' value='{$row['PK_Teilnehmer']}, value='{$row['PK_Teilnehmer']}'>
                            <button type='submit'>Hinzufügen</button>
                        </form>
                    </td>
                  </tr>";
        }
    } catch (PDOException $e) {
        echo "Fehler: " . $e->getMessage();
    }
    ?>
</body>
</html>