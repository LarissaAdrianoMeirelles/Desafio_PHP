<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
</head>
<body>
    <h2>Soma de Três Valores</h2>
    <form method="post" action="">
        <input type="number" name="valor1" placeholder="Digite o primeiro valor" required><br>
        <input type="number" name="valor2" placeholder="Digite o segundo valor" required><br>
        <input type="number" name="valor3" placeholder="Digite o terceiro valor" required><br>
        <input type="submit" value="Calcular">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $v1 = $_POST["valor1"];
        $v2 = $_POST["valor2"];
        $v3 = $_POST["valor3"];

        // Realiza as operações aritméticas
        $resultado_adicao = $v1 + $v2 + $v3;

        // Exibir os resultados
        echo "<br> Resultado da Adição: $v1 + $v2 + $v3 = $resultado_adicao <br>";
    }
?>
</body>
</html>
