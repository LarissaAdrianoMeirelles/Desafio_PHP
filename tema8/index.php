<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["idade"] = $_POST["idade"];
    $_SESSION["peso"] = $_POST["peso"];
    $_SESSION["altura"] = $_POST["altura"];
    header("Location: pagina2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            margin-top: 0;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .resultado {
            margin-top: 20px;
            background-color: #fff;
            padding: 10px;
            border-radius: 3px;
        }
    </style>

</head>
<body>
<div class="container">
    <h2>Digite suas informações:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade" required><br>
        <label for="peso">Peso (kg):</label><br>
        <input type="number" id="peso" name="peso" required><br>
        <label for="altura">Altura (m):</label><br>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>
