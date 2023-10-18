<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldeformular Teilnehmer</title>
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
            color: #fc0303;
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
        <h1>Anmeldeformular</h1>    
        <h2>Kontaktdaten des Betriebs</h2>
        <form action="Anmeldeformular_Teilnehmer.php" method="Post">
            <div class="form-group">
                <label for="BetriebN">Name des Betriebs*</label>
                <input type="text" id="BetriebN" placeholder="Mustermann GMBH" name="BetriebN" required>
            </div>
            <div class="form-group">
                <label for="Ansprechpartner">Ansprechpartner*</label>
                <input type="text" id="Vorname" placeholder="Vorname" name="Vorname" required>
                <input type="text" id="Nachname" placeholder="Nachname" name="Nachname" required>
            </div>
            <div class="form-group">
                <label for="EmailA">Email Adresse des Ansprechpartner</label>
                <input type="email" id="EmailA" placeholder="Beispiel@xyz.de" name="EmailA" required>
                <h5>Email</h5>
                <input type="email" id="EmailA" placeholder="Beispiel@xyz.de" name="EmailA" required>
                <h5>Email Bestätigen</h5>
            </div>
            <div class="form-group">
                <label for="telefon">Telefonnummer:</label>
                <input type="tel" id="telefon"  placeholder="0212 999 999" name="telefon" required>
            </div>
            <div class="form-group">
                <label for="Adresse">Straße und Hausnummer</label>
                <input type="text" id="Adresse"  placeholder="Musterstraße 6" name="Adresse" required>
                
            </div>
            <div class="form-group">
                <label for="Ort">Ort</label>
                <input type="text" id="Ort"  placeholder="Land" name="Ort" required>
                <input type="text" id="Ort"  placeholder="Stadt" name="Ort" required>
                <input type="text" id="Ort"  placeholder="PLZ" name="Ort" required>
            </div>
            <div class="form-group">
                <label for="RechnungE">Email(für die Rechnungsstellung)*</label>
                <input type="email" id="RechnungE" placeholder="Rechnung@xyz.de" name="RechnungE" required>
                <h5>Email</h5>
                <input type="email" id="RechnungE" placeholder="Rechnung@xyz.de" name="RechnungE" required>
                <h5>Email Bestätigen</h5>
            </div>
            <div class="form-group">
                <input type="submit" value="Anmelden">
            </div>
        </form>
    </div>
</body>
</html>
