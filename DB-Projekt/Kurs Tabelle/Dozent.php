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
    </style>
<body>
<h2>Datenbanktabelle</h2>

<form action="Dozent_erstellen.php" method="post">
    <div class="teb"> 
        <button type="submit" class="centered-button">Dozent erstellen</button>
    </div>
</form>
    
<table border="1">
    <tr>
        <th>ID</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Anrede</th>
        <th>Kuerzel</th>
        <th>Strasse</th>
        <th>Hausnummer</th>
        <th>Steuernummer</th>
        <th>PLZ</th>
        <th>Ort</th>
        <th>Land</th>
    </tr>

    <?php
    $servername = 'localhost';
    $dbname = 'db_tas';
    $user = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT tbl_dozent.PK_Dozent as Dozent_Teilnehmer, tbl_dozent.Vorname as Dozent_Vorname, 
        tbl_dozent.Nachname as Dozent_Nachname, tbl_dozent.Anrede as Dozent_Anrede, tbl_dozent.Kuerzel as Dozent_EMail, 
        tbl_dozent.Strasse as Dozent_Telefon, tbl_dozent.Strasse as Dozent_Strasse, tbl_dozent.Hausnummer as Dozent_Hausnummer, 
        tbl_dozent.Steuernummer as Dozent_Steuernummer, tbl_dozent.PLZ as Dozent_PLZ, 
        tbl_dozent.Ort as Dozent_Ort, tbl_dozent.Land as Dozent_Land FROM tbl_kurs 
        LEFT JOIN tbl_kurs_dozent ON tbl_kurs.PK_Kurs = tbl_kurs_dozent.FK_Kurs 
        LEFT JOIN tbl_dozent ON FK_Dozent = PK_Dozent WHERE Kursnummer = :Kursnummer");
        $stmt->bindparam(":Kursnummer", $_POST["Kursnummer"]);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['Dozent_Teilnehmer']}</td>
                    <td>{$row['Dozent_Vorname']}</td>
                    <td>{$row['Dozent_Nachname']}</td>
                    <td>{$row['Dozent_Anrede']}</td>
                    <td>{$row['Dozent_EMail']}</td>
                    <td>{$row['Dozent_Telefon']}</td>
                    <td>{$row['Dozent_Strasse']}</td>
                    <td>{$row['Dozent_Hausnummer']}</td>
                    <td>{$row['Dozent_Steuernummer']}</td>
                    <td>{$row['Dozent_PLZ']}</td>
                    <td>{$row['Dozent_Ort']}</td>
                    <td>{$row['Dozent_Land']}</td>
                  </tr>";
        }
    } catch (PDOException $e) {
        echo "Fehler: " . $e->getMessage();
    }
    ?>
</body>
</html>