<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular mit Dropdown-Menü</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 950px;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        select, input[type="text"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            padding: 60px;
        }

        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 30px;
            text-align: center;
        }
     
    </style>
</head>
<body>  
    <script>
        var techButton = document.getElementById('radio-techy');
var nonTechButton = document.getElementById('radio-non-techy');

techButton.onclick = function () {
    document.getElementById('select-div').className = 'tech';
}
nonTechButton.onclick = function () {
    document.getElementById('select-div').className = 'non-tech';
}
</script>
    <div class="container">
        <h2>Personeninformationen</h2>
        <form action="#" method="post">
            <div>
                <div class="grid-container">
                    <div class="grid-item">
                        <div>
                            <label for="geschlecht">Geschlecht:</label>
                                <select id="geschlecht" name="geschlecht">
                                    <option value="männlich">Männlich</option>
                                    <option value="weiblich">Weiblich</option>
                                </select>
                            </div>
                            <div>
                            <input type="text" id="vorname" placeholder="Vorname" name="vorname" required>
                            </div>
                                <div>
                                    <input type="text" id="nachname" placeholder="Nachname" name="nachname" required>
                                </div>
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
                            <?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>
                            <div class="grid-item">
                                <label for="Kosten"></label>
                                <b>Kosten</b><break>
                                <p>10.00 €</p>
                         </div>
                </div>
                <input type="submit" value="Absenden">
            </div>
        </form>
    </div>
</body>
</html>
