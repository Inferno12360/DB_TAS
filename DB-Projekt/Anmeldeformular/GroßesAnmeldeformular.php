<!DOCTYPE html>
<html lang="de">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Anmeldeformular</title>
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
         <form action="DatenbankSchicken.php" method="post">
            <div>
               <div class="grid-container">
                  <div class="grid-item">
                     <div>

         <h1>Anmeldeformular</h1>
         <div class="form-group">
         <h2>Personeninformationen</h2>
         <label for="vorname">Vorname:</label>
         <input type="text" id="vorname" name="vorname" required>
         </div>
         <div class="form-group">
         <label for="nachname">Nachname:</label>
         <input type="text" id="nachname" name="nachname" required>
         </div>
         <div class="form-group">
         <label for="email">E-Mail:</label>
         <input type="email" id="email" name="email" required>
         </div>
         <div class="form-group">
         <label for="telefon">Telefonnummer:</label>
         <input type="tel" id="telefon" name="telefon" required>
         </div>
         <div class="grid-item">
         <div class="form-group">
         <label for="Kurs1">GG2WE5 <br>(Blockzeitraum A)</lable><br>    
         <input type="radio" id="Kurs1" name="Kurs" value="Kurs1">
         <label for="Kurs2">GG2WE5 <br>(Blockzeitraum B)</lable><br>
         <input type="radio" id="Kurs2" name="Kurs" value="Kurs2">
         <label for="Kurs3">GG2WE5 <br>(Blockzeitraum C)</lable><br>
         <input type="radio" id="Kurs3" name="Kurs" value="Kurs3">
         </div>
         </div>
         <div class="form-group">
         <label>Geschäftstyp:</label>
         <input type="radio" id="privat" name="geschaeftstyp" value="privat">
         <label for="privat">Privat</label>
         <input type="radio" id="firma" name="geschaeftstyp" value="firma">
         <label for="firma">Firma</label>
         </div>
        

         <h2>Kontaktdaten des Betriebs</h2>
         <form action="" method="post">
         <div class="form-group">
         <label for="BetriebN">Name des Betriebs*</label>
         <input type="text" id="BetriebN" placeholder="Mustermann GMBH" name="BetriebN" required>
         </div>
         <div class="form-group">
         <label for="Adresse">Straße</label>
         <input type="text" id="Strasse"  placeholder="Musterstraße" name="Strasse" required>
         </div>
         <div class="form-group">
         <label for="Adresse">Nummer</label>
         <input type="text" id="Nummer"  placeholder="6" name="NummerH" required>
         </div>
         <div class="form-group">
         <label for="Ort">Ort</label>
         <input type="text" id="Ort"  placeholder="Land" name="Land" required>
         <input type="text" id="Ort"  placeholder="Stadt" name="Stadt" required>
         <input type="text" id="Ort"  placeholder="PLZ" name="PLZ" required>
         </div>
         <div class="form-group">
         <label for="Ansprechpartner">Ansprechpartner*</label>
         <input type="text" id="Vorname" placeholder="Vorname" name="Vorname" required>
         <input type="text" id="Nachname" placeholder="Nachname" name="Nachname" required>
         </div>
         <div class="form-group">
         <label for="EmailA">Email Adresse des Ansprechpartner</label>
         <br></br>
         <input type="email" id="EmailA" placeholder="Beispiel@xyz.de" name="EmailA">
         <div class="form-group">
         <br></br>
         <label for="telefon">Telefonnummer:</label>
         <input type="tel" id="telefon"  placeholder="0212 999 999" name="telefon">
         </div>
   
         <div class="form-group">
         <label for="RechnungE">Email(für die Rechnungsstellung)*</label>
         <h5>Email</h5>
         <input type="email" id="RechnungE" placeholder="Rechnung@xyz.de" name="RechnungE">
         </div>
         <div class="form-group">
         </div>
         </form>
         <div class="form-group">
         <label for="kurse">Kurse:</label>
         <select id="kurse" name="kurse">
         <option value="kurs1">Kurs 1</option>
         <option value="kurs2">Kurs 2</option>
         <option value="kurs3">Kurs 3</option>
         </select>
         </div>
         
         <div class="grid-item">
         <label for="Kosten"></label>
         <b>Kosten:</b>
         <p>10.00€ pro Kurs/Teilnehmer</p>

         </div>
         </div>
         <button type="submit" name="submit" value="add_Anmedlung"> Absenden</button>
         </div>
         </form>
      </div>
   </body>
</html>