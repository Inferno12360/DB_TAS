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
<h2>Datenbanktabelle</h2>

<form action="Dozent_erstellen.php" method="post">
    <div class="teb"> 
        <button type="submit" class="centered-button">Dozent erstellen</button>
    </div>
</form>
    <?php
        $servername = 'localhost';
        $dbname = 'db_tas';
        $username = 'root';
        $password = '';
    
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_dozent");
        $stmt->execute();

        if(!empty($_POST["cng_dozent"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                $fields = array( "Vorname", "Nachname", "Anrede", "Kuerzel", "Strasse", "Hausnummer", "Steuernummer", "PLZ", "Ort", "Land");
                foreach ($fields as $key) {
                    updateDozent($conn, "tbl_dozent", $key, $_POST[$key], $_POST["cng_dozent"]);
                }
            }
        }

        function updateDozent($conn, $table, $target, $value, $primarykey) {
            if (isset($_POST[$target])) { 
                $update = $conn->prepare("UPDATE $table SET $target=:value WHERE PK_Dozent=:cng_dozent");
                $update->bindParam(":value", $_POST[$target]);
                $update->bindParam(":cng_dozent", $primarykey);
                $update->execute();
                header("Refresh: 0.1; url=$_SERVER[PHP_SELF]");
            } 
        }
        ?>
 <div><br>
            <table style="width: 100%;"> 
            <tr>
                    <th> ID </th>
                    <th> Vorname </th>
                    <th> Nachname </th>
                    <th> Anrede </th>
                    <th> Kuerzel </th>
                    <th> Strasse </th>
                    <th> Hausnummer </th>
                    <th> Steuernummer </th>
                    <th>PLZ</th>
                    <th>Ort</th>
                    <th>Land</th>
                    <th>Bearbeiten Bestätigen</th>
                    <th>Löschen</th>
                    </tr>


                <?php 

                   $stmt = $conn->query("SELECT PK_Dozent, Vorname, Nachname, Anrede, Kuerzel, Steuernummer,Strasse, Hausnummer, PLZ, Ort, Land FROM tbl_dozent");


                    while($row = $stmt->fetch()) {
                          ?>
                        <tr> 
                        <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
                            <td> <input value="<?php echo $row["PK_Dozent"]?>" readonly name="PK_Dozent" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Vorname"]?>" name="Vorname" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Nachname"]?>" name="Nachname" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Anrede"]?>" name="Anrede" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Kuerzel"]?>" name="Kuerzel" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Strasse"]?>" name="Strasse" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Hausnummer"]?>" name="Hausnummer" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Steuernummer"]?>" name="Steuernummer" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["PLZ"]?>" name="PLZ" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Ort"]?>" name="Ort" type="text" class="edit"></td>
                            <td> <input value="<?php echo $row["Land"]?>" name="Land" type="text" class="edit"></td>
                            <td>  
                            <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
                                <button type="submit" name="cng_dozent" value="<?php echo $row["PK_Dozent"]?>"></button>
                                </form>
                            </td>
                            <td>  
                            <form method='post' action='delete_Dozent.php'>
                                <button type="submit" name="PK_Dozent" value="<?php echo $row["PK_Dozent"]?>"></button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        }
                ?>
        </table>
    </div> 
</body>
</html>