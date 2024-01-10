<?php
print_r($_POST);
?>
</pre>
<!DOCTYPE html>
<html>
<head>
<title>Daten verbessern</title>
</head>
<body>

<h1>Daten Aktualisieren</h1>

    
<?php

#$id = $_POST['PK_Dozent'];
#$vorname = $_POST['Vorname'];
#$nachname = $_POST['Nachname'];
#$Anrede = $_POST['Anrede'];
#$EMail = $_POST['EMail'];
#$Telefon = $_POST['Telefon'];
#$Strasse = $_POST['Strasse'];
#$Hausnummer = $_POST['Hausnummer'];
#$Rechnungsstellung = $_POST['Rechnungsstellung'];
#$PLZ = $_POST['PLZ'];
#$Ort = $_POST['Ort'];
#$Land = $_POST['Land'];

?>
<form>
<label for="vorname">Vorname:</label><br>
<input type='hidden' name='Vorname' value="<?php echo $_POST['Vorname']; ?>">

<label for="lname">Last name:</label><br>
<input type="text" id="lname" name="lname" value="<?php echo $_POST['Nachname']; ?>">
</form>

</body>
</html>