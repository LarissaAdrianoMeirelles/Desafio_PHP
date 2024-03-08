<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

        }

        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Calculadora de IMC</h2>
    <form method="post" action="">
        <input type="text" name="valor1" placeholder="Digite o seu peso" required><br>
        <input type="text" name="valor2" placeholder="Digite a sua altura" required><br>
        
        <input type="submit" value="Calcular">
    </form>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        
        $v1 = $_POST["valor1"];
        $v2 = $_POST["valor2"];
       
        
        // Realiza as operações aritméticas
        $resultado_calculo = $v1/($v2 * $v2);

        // Exibir os resultados
        echo "<br> Seu IMC é: $resultado_calculo <br>";

    
    }
?>
</div>
</body>
</html>
