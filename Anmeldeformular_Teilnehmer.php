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
            width: 300px;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Personeninformationen</h2>
        <form action="#" method="post">
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
            <div class="form-group">
                <input type="radio" id="Kurs1" name="Kurs1" value="Kurs1">
                <label for="Kurs1">Kurs1</lable><br>
                <input type="radio" id="Kurs2" name="Kurs2" value="Kurs2">
                <label for="Kurs2">Kurs2</lable><br>
                <input type="radio" id="Kurs3" name="Kurs3" value="Kurs3">
                <label for="Kurs3">Kurs3</lable><br>
            </div>
            <div>
                <input type="submit" value="Absenden">
            </div>
        </form>
    </div>
</body>
</html>
