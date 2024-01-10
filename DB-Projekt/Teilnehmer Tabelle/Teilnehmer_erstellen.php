<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"></table>
    <title>Teilnehmer erstellen</title>
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
           align-items: center;
        margin-bottom: 20px;
        }
        label {
           
        font-weight: bold;
        }
        h{
           font-size: large;
           font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        input[type="number"]{
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 5px;
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

        button {
            background-color: #007bff;
         color: #fff; 
         padding: 10px 15px;
         border: none;
         border-radius: 3px;
         cursor: pointer;
         transition: background-color 0.3s ease;
         }
         button[type="submit"]:hover {
         background-color: #0056b3;
         }
   </style>
</head>
<body>
<form action="add_Teilnehmer.php" method="post">
             <div class="form-group">
         <label for="PK_Teilnehmer">ID:</label>
         <input type="text" id="PK_Teilnehmer" name="PK_Teilnehmer" >
         </div>
         <div class="form-group">
         <label for="Vorname">Vorname:</label>
         <input type="text" id="Vorname" name="Vorname" >
         </div>
         <div class="form-group">
         <label for="Nachname">Nachname:</label>
         <input type="text" id="Nachname" name="Nachname" >
         </div>
         <div class="form-group">
         <label for="Anrede">Anrede:</label>
         <input type="text" id="Anrede" name="Anrede" >
         </div>
         <div class="form-group">
         <label for="EMail">EMail:</label>
         <input type="email" id="EMail" name="EMail" >
         </div>
         <div class="form-group">
         <label for="Telefon">Telefon:</label>
         <input type="number" id="Telefon" name="Telefon" >
         </div>
         <div class="form-group">
         <label for="Hausnummer">Hausnummer:</label>
         <input type="text" id="Hausnummer"  placeholder="6" name="Hausnummer">
         </div>
         <div class="form-group">
         <label for="Strasse">Straße:</label>
         <input type="text" id="Strasse"  placeholder="Musterstraße" name="Strasse" >
         </div>
         <div class="form-group">
         <label for="Rechnungsstellung">Rechnungsstellung:</label>
         <input type="text" id="Rechnungsstellung"  name="Rechnungsstellung" >
         </div>
         <div class="form-group">
         <label for="Adresse">Adresse:</label>
         <input type="number" id="PLZ"  placeholder="PLZ" name="PLZ" >
         <input type="text" id="Ort"  placeholder="Ort" name="Ort" >
         <input type="text" id="Land"  placeholder="Land" name="Land" >
         </div>
         </select>
         
            <button type='submit'>hinzufügen</button>
                <button type="submit" value="zurück">zurück</button>
        </form>
    </body>
</html>