<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"></table>
    <title>Dozent Tabelle</title>
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
    <form action="add_Dozent.php" method="post">

        <h>Dozent hinzufügen</h><br><br>

        <div class="form-group">
            <label for="vorname">Vorname:</label>
            <input type="text" id="vorname" name="vorname" required><br>
            
            <label for="nachname">Nachname:</label>
            <input type="text" id="nachname" name="nachname" required><br>
           
            <label for="geschlecht">Geschlecht:</label>
            <select id="geschlecht" name="anrede">
            <option value="Herr">Mänlich</option>
            <option value="Frau">Weiblich</option>
            </select><br>
            
            <label for="kuerzel">Kuerzel:</label>
            <input type="text" id="kuerzel" name="kuerzel" required><br>
            
            
            <label for="steuernummer">Steuernummer</label>
            <input type="number" id="steuernummer" name="steuernummer" required><br>
          
            <label for="Adresse">Straße</label>
            <input type="text" id="Strasse"  placeholder="Musterstraße" name="strasse" ><br>
            <input type="text" id="Nummer"  placeholder="X" name="hausnummer" ><br>
           
            <label for="Ort">Ort</label>
            <input type="text" id="Ort"  placeholder="Land" name="land" required><br>
            <input type="text" id="Ort"  placeholder="Stadt" name="stadt" required><br>
            <input type="text" id="Ort"  placeholder="PLZ" name="plz" required><br> <br>
            
            <input type="submit" value="erstellen">
            
            
            </div>

             
            <div class="form-group">
        </form> 
        <form method='post' value="zurück" action='Kursliste.php'>
                <button type="submit" value="zurück">zurück</button>
                </div>
        </form>
        
    </body>
    </html>
