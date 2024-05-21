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
        echo "<h1>Atualizar Usuario</h1>";
        formularioAtualizar();
        $u = $_POST['usuario'] ?? null;
        $s = $_POST['senha'] ?? null;
        $n = $_POST['nome'] ?? null;

        atualizarUsuario($u, $n, $s);
        echo "<br><a href=\"index2.php\"><input type =\"submit\" name=\"atualizar\" value=\"Voltar\"></a>";
    ?>  
</body>
</html>
