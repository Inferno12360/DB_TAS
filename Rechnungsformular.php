<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnungen</title>^
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
    }
    ?>
    <style>
        body {
             font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        input[type="radio"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 5px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .required {
            color: #ff0000;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="">
        <label for="Leisting">Art der Leistung</label>
        <input type="text" name="Art_Der_Leistung" require>
        <label for="Kursnummer">Kursnummer</label>
        <input type="text" name="Kursnummer" require>
        <label for="Verwendungszweck">Verwendungszweck</label>
        <input type="text" name="Verwendungszweck" require>
        <label for="Datum">Kurs Datum</label>
        <input type="date" name="Kurs_Datum" require><br>
        <label for="Teilnehmer">Teilnehmer</label>
        <label for="Vorname"></label>
        <input type="text" name="Vorname" require>
        <label for="Name">Nachname</label>
        <input type="text" name="Name" require>
        <label for="Kosten">Kosten</label>
        <input type="text" name="Betrag" id="betrag"require>
        </form>
    </div>
</body>
</html>