<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resposta</h1>
    <?php

    echo print_r($_GET);
    $nome = $_GET['nomePessoa'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];

    echo "<br>Bem vindo ". $nome . " ". $sobrenome. "!!";
    echo "<br>Idade: ". $idade;

    ?>
</body>
</html>