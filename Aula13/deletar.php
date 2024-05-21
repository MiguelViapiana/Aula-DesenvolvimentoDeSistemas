<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require_once "banco.php";
        require "funcoes.php";
        echo "<h1>Deletar Usuário</h1>";
        formularioDeletar();
        $u = $_POST['usuario'] ?? null;

        deletarUsuario($u);
        echo "<br><a href=\"index2.php\"><input type =\"submit\" name=\"atualizar\" value=\"Voltar\"></a>";
    ?>
</body>
</html>