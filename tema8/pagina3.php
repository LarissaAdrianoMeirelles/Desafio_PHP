<?php
session_start();

$nome1 = $_SESSION["nome"];
$idade1 = $_SESSION["idade"];
$peso1 = $_SESSION["peso"];
$altura1 = $_SESSION["altura"];

$nome2 = $_SESSION["nome2"];
$idade2 = $_SESSION["idade2"];
$peso2 = $_SESSION["peso2"];
$altura2 = $_SESSION["altura2"];

if ($idade1 > $idade2) {
    $maiorIdade = $nome1;
} else if ($idade2 > $idade1){
    $maiorIdade = $nome2;
} else {
    $maiorIdade = "Ambos tem a mesma idade";
}

if ($peso1 > $peso2) {
    $maiorPeso = $nome1;
} else if ($peso2 > $peso1){
    $maiorPeso = $nome2;
} else {
    $maiorPeso = "Ambos tem o mesmo peso";
}

if ($altura1 > $altura2) {
    $maiorAltura = $nome1;
} else if ($altura2 > $altura1){
    $maiorAltura = $nome2;
} else {
    $maiorAltura = "Ambos tem a mesma altura";
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>

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
    <h2>Comparação de Informações</h2>
    <p>Quem é o mais alto: <?php echo $maiorAltura; ?></p>
    <p>Quem é mais velho: <?php echo $maiorIdade; ?></p>
    <p>Quem tem o peso maior: <?php echo $maiorPeso; ?></p>
</div>
</body>
</html>
